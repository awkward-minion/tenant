<?php

namespace App;

use App\Repositories\OrganizationRepository;
// use Hyn\Tenancy\Contracts\Repositories\CustomerRepository;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Environment;
// use Hyn\Tenancy\Models\Customer;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @property Customer customer
 * @property Website website
 * @property Hostname hostname
 * @property User admin
 */
class Tenant
{
    public function __construct(
        // Customer $customer,
        Website $website = null,
        Hostname $hostname = null,
        User $admin = null
    ) {
        // $this->customer = $customer;
        $this->website = $website ?? $customer->websites->first();
        $this->hostname = $hostname ?? $customer->hostnames->first();
        $this->admin = $admin;
    }

    public function delete()
    {
        app(HostnameRepository::class)->delete($this->hostname, true);
        app(WebsiteRepository::class)->delete($this->website, true);
        // app(CustomerRepository::class)->delete($this->customer, true);
    }

    public static function createFrom($name, $email, $organization, $domain, $password = null, $order_id = null): Tenant
    {
        // create a customer
        // $customer = new Customer;
        // $customer->name = $name;
        // $customer->email = $email;

        // $customer_db = app(CustomerRepository::class)->create($customer);

        // associate the customer with a website
        try {
            $website = new Website;
            // $website->customer()->associate($customer);
            try {
                $website_db = app(WebsiteRepository::class)->create($website);
            } catch (\Exception $website_option_error) {
                // dd($website_option_error);
                throw $website_option_error;
            }
            // dd($website_db);
            // associate the website with a hostname
            $hostname = new Hostname;
            $baseUrl = config('app.url_base');
            $hostname->fqdn = "{$domain}.{$baseUrl}";
            // $hostname->customer()->associate($customer);
            $hostname_db = app(HostnameRepository::class)->attach($hostname, $website);

            $organization_db = app(OrganizationRepository::class)->create([
                'name' => $organization,
                'hostname' => $hostname_db->id,
                'website' => $website_db->id,
                'creator_name' => $name,
                'creator_email' => $email,
                'domain' => $domain,
            ]);

            // make hostname current
            app(Environment::class)->hostname($hostname);

            $admin = static::makeAdmin($website, $name, $email, $password ?: Str::random());

            return new Tenant($website, $hostname, $admin);
        } catch (\Exception $createErr) {
            throw $createErr;
        }
    }

    private static function makeAdmin($website, $name, $email, $password): User
    {
        $tenancy = app(Environment::class);
        $tenancy->tenant($website); // switches the tenant and reconfigures the app

        $admin = User::create(['name' => $name, 'email' => $email, 'password' => Hash::make($password)]);
        $admin->guard_name = 'api';

        return $admin;
    }

    public static function retrieveBy($name): ?Tenant
    {
    }
}
