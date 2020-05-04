<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\CreateOrganization;
use Illuminate\Validation\Rule;
use Lakshmaji\Exceptions\GenericException;
use Lakshmaji\Exceptions\GenericExceptionType;
use Carbon\Carbon;
use Config;
use App\Tenant;
use App\CustomException;
use Faker\Generator as Faker;

class OrderController extends Controller
{
    protected $faker;
    protected $carbon;
    protected $request;

    public function __construct(
        Request $request,
        Carbon $carbon,
        Faker $faker
    ) {
        $this->request = $request;
        $this->faker = $faker;
        $this->carbon = $carbon;
    }

    public function mockOrganization()
    {
        CreateOrganization::dispatch(
            $this->faker->firstName,
            $this->faker->email,
            $this->faker->firstName,
            $this->faker->domainWord,
            null,
            '11232'
        );
            
        return response()->json(['message' => 'completed'], 200);
    }
}
