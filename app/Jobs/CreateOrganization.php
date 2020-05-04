<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Tenant;

class CreateOrganization implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable;

    protected $email;
    protected $name;
    protected $organization;
    protected $domain;
    protected $branch;
    protected $order_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($name, $email, $organization, $domain, $branch, $order_id)
    {
        $this->email = $email;
        $this->name = $name;
        $this->organization = $organization;
        $this->domain = $domain;
        $this->branch = $branch;
        $this->order_id = $order_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tenant = Tenant::createFrom($this->name, $this->email, $this->organization, $this->domain, null, $this->order_id);
    }
}
