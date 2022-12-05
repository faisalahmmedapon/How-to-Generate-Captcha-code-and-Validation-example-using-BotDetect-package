Step 1: Install Laravel

first of all we need to get fresh Laravel 8 version application using bellow command, So open your terminal OR command prompt and run bellow command:

composer create-project --prefer-dist laravel/laravel blog

Step 2: Create Seeder and Country Model

here, we will create migration for countries table. so let's create migration as bellow:

php artisan make:migration create_countries_table

database/migrations/your_migtion_file.php

<?php

  

use Illuminate\Database\Migrations\Migration;

use Illuminate\Database\Schema\Blueprint;

use Illuminate\Support\Facades\Schema;

  

class CreateCountriesTable extends Migration

{

    /**

     * Run the migrations.

     *

     * @return void

     */

    public function up()

    {

        Schema::create('countries', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->string('code');

            $table->timestamps();

        });

    }

  

    /**

     * Reverse the migrations.

     *

     * @return void

     */

    public function down()

    {

        Schema::dropIfExists('countries');

    }

}

now let's run migration:

php artisan migrate

next, add soft delete facade in user model as like bellow:

app/Models/County.php

<?php

  

namespace App\Models;

  

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

  

class Country extends Model

{

    use HasFactory;

  

    protected $fillable = [

        'name', 'code'

    ];

}

Read Also: How to Create Custom Log File in Laravel?

Step 3: Create Seeder

In this step, we need to create add seeder for country lists.

Create Seeder with bellow command

php artisan make:seeder CountrySeeder

database/seeders/CountrySeeder.php

<?php

  

namespace Database\Seeders;

  

use Illuminate\Database\Seeder;

use App\Models\Country;

  

class CountrySeeder extends Seeder

{

    /**

     * Run the database seeds.

     *

     * @return void

     */

    public function run()

    {

        Country::truncate();

  

        $countries = [

            ['name' => 'Afghanistan', 'code' => 'AF'],

            ['name' => 'Åland Islands', 'code' => 'AX'],

            ['name' => 'Albania', 'code' => 'AL'],

            ['name' => 'Algeria', 'code' => 'DZ'],

            ['name' => 'American Samoa', 'code' => 'AS'],

            ['name' => 'Andorra', 'code' => 'AD'],

            ['name' => 'Angola', 'code' => 'AO'],

            ['name' => 'Anguilla', 'code' => 'AI'],

            ['name' => 'Antarctica', 'code' => 'AQ'],

            ['name' => 'Antigua and Barbuda', 'code' => 'AG'],

            ['name' => 'Argentina', 'code' => 'AR'],

            ['name' => 'Armenia', 'code' => 'AM'],

            ['name' => 'Aruba', 'code' => 'AW'],

            ['name' => 'Australia', 'code' => 'AU'],

            ['name' => 'Austria', 'code' => 'AT'],

            ['name' => 'Azerbaijan', 'code' => 'AZ'],

            ['name' => 'Bahamas', 'code' => 'BS'],

            ['name' => 'Bahrain', 'code' => 'BH'],

            ['name' => 'Bangladesh', 'code' => 'BD'],

            ['name' => 'Barbados', 'code' => 'BB'],

            ['name' => 'Belarus', 'code' => 'BY'],

            ['name' => 'Belgium', 'code' => 'BE'],

            ['name' => 'Belize', 'code' => 'BZ'],

            ['name' => 'Benin', 'code' => 'BJ'],

            ['name' => 'Bermuda', 'code' => 'BM'],

            ['name' => 'Bhutan', 'code' => 'BT'],

            ['name' => 'Bolivia, Plurinational State of', 'code' => 'BO'],

            ['name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ'],

            ['name' => 'Bosnia and Herzegovina', 'code' => 'BA'],

            ['name' => 'Botswana', 'code' => 'BW'],

            ['name' => 'Bouvet Island', 'code' => 'BV'],

            ['name' => 'Brazil', 'code' => 'BR'],

            ['name' => 'British Indian Ocean Territory', 'code' => 'IO'],

            ['name' => 'Brunei Darussalam', 'code' => 'BN'],

            ['name' => 'Bulgaria', 'code' => 'BG'],

            ['name' => 'Burkina Faso', 'code' => 'BF'],

            ['name' => 'Burundi', 'code' => 'BI'],

            ['name' => 'Cambodia', 'code' => 'KH'],

            ['name' => 'Cameroon', 'code' => 'CM'],

            ['name' => 'Canada', 'code' => 'CA'],

            ['name' => 'Cape Verde', 'code' => 'CV'],

            ['name' => 'Cayman Islands', 'code' => 'KY'],

            ['name' => 'Central African Republic', 'code' => 'CF'],

            ['name' => 'Chad', 'code' => 'TD'],

            ['name' => 'Chile', 'code' => 'CL'],

            ['name' => 'China', 'code' => 'CN'],

            ['name' => 'Christmas Island', 'code' => 'CX'],

            ['name' => 'Cocos (Keeling) Islands', 'code' => 'CC'],

            ['name' => 'Colombia', 'code' => 'CO'],

            ['name' => 'Comoros', 'code' => 'KM'],

            ['name' => 'Congo', 'code' => 'CG'],

            ['name' => 'Congo, the Democratic Republic of the', 'code' => 'CD'],

            ['name' => 'Cook Islands', 'code' => 'CK'],

            ['name' => 'Costa Rica', 'code' => 'CR'],

            ['name' => 'Côte d\'Ivoire', 'code' => 'CI'],

            ['name' => 'Croatia', 'code' => 'HR'],

            ['name' => 'Cuba', 'code' => 'CU'],

            ['name' => 'Curaçao', 'code' => 'CW'],

            ['name' => 'Cyprus', 'code' => 'CY'],

            ['name' => 'Czech Republic', 'code' => 'CZ'],

            ['name' => 'Denmark', 'code' => 'DK'],

            ['name' => 'Djibouti', 'code' => 'DJ'],

            ['name' => 'Dominica', 'code' => 'DM'],

            ['name' => 'Dominican Republic', 'code' => 'DO'],

            ['name' => 'Ecuador', 'code' => 'EC'],

            ['name' => 'Egypt', 'code' => 'EG'],

            ['name' => 'El Salvador', 'code' => 'SV'],

            ['name' => 'Equatorial Guinea', 'code' => 'GQ'],

            ['name' => 'Eritrea', 'code' => 'ER'],

            ['name' => 'Estonia', 'code' => 'EE'],

            ['name' => 'Ethiopia', 'code' => 'ET'],

            ['name' => 'Falkland Islands (Malvinas)', 'code' => 'FK'],

            ['name' => 'Faroe Islands', 'code' => 'FO'],

            ['name' => 'Fiji', 'code' => 'FJ'],

            ['name' => 'Finland', 'code' => 'FI'],

            ['name' => 'France', 'code' => 'FR'],

            ['name' => 'French Guiana', 'code' => 'GF'],

            ['name' => 'French Polynesia', 'code' => 'PF'],

            ['name' => 'French Southern Territories', 'code' => 'TF'],

            ['name' => 'Gabon', 'code' => 'GA'],

            ['name' => 'Gambia', 'code' => 'GM'],

            ['name' => 'Georgia', 'code' => 'GE'],

            ['name' => 'Germany', 'code' => 'DE'],

            ['name' => 'Ghana', 'code' => 'GH'],

            ['name' => 'Gibraltar', 'code' => 'GI'],

            ['name' => 'Greece', 'code' => 'GR'],

            ['name' => 'Greenland', 'code' => 'GL'],

            ['name' => 'Grenada', 'code' => 'GD'],

            ['name' => 'Guadeloupe', 'code' => 'GP'],

            ['name' => 'Guam', 'code' => 'GU'],

            ['name' => 'Guatemala', 'code' => 'GT'],

            ['name' => 'Guernsey', 'code' => 'GG'],

            ['name' => 'Guinea', 'code' => 'GN'],

            ['name' => 'Guinea-Bissau', 'code' => 'GW'],

            ['name' => 'Guyana', 'code' => 'GY'],

            ['name' => 'Haiti', 'code' => 'HT'],

            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM'],

            ['name' => 'Holy See (Vatican City State)', 'code' => 'VA'],

            ['name' => 'Honduras', 'code' => 'HN'],

            ['name' => 'Hong Kong', 'code' => 'HK'],

            ['name' => 'Hungary', 'code' => 'HU'],

            ['name' => 'Iceland', 'code' => 'IS'],

            ['name' => 'India', 'code' => 'IN'],

            ['name' => 'Indonesia', 'code' => 'ID'],

            ['name' => 'Iran, Islamic Republic of', 'code' => 'IR'],

            ['name' => 'Iraq', 'code' => 'IQ'],

            ['name' => 'Ireland', 'code' => 'IE'],

            ['name' => 'Isle of Man', 'code' => 'IM'],

            ['name' => 'Israel', 'code' => 'IL'],

            ['name' => 'Italy', 'code' => 'IT'],

            ['name' => 'Jamaica', 'code' => 'JM'],

            ['name' => 'Japan', 'code' => 'JP'],

            ['name' => 'Jersey', 'code' => 'JE'],

            ['name' => 'Jordan', 'code' => 'JO'],

            ['name' => 'Kazakhstan', 'code' => 'KZ'],

            ['name' => 'Kenya', 'code' => 'KE'],

            ['name' => 'Kiribati', 'code' => 'KI'],

            ['name' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP'],

            ['name' => 'Korea, Republic of', 'code' => 'KR'],

            ['name' => 'Kuwait', 'code' => 'KW'],

            ['name' => 'Kyrgyzstan', 'code' => 'KG'],

            ['name' => 'Lao People\'s Democratic Republic', 'code' => 'LA'],

            ['name' => 'Latvia', 'code' => 'LV'],

            ['name' => 'Lebanon', 'code' => 'LB'],

            ['name' => 'Lesotho', 'code' => 'LS'],

            ['name' => 'Liberia', 'code' => 'LR'],

            ['name' => 'Libya', 'code' => 'LY'],

            ['name' => 'Liechtenstein', 'code' => 'LI'],

            ['name' => 'Lithuania', 'code' => 'LT'],

            ['name' => 'Luxembourg', 'code' => 'LU'],

            ['name' => 'Macao', 'code' => 'MO'],

            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK'],

            ['name' => 'Madagascar', 'code' => 'MG'],

            ['name' => 'Malawi', 'code' => 'MW'],

            ['name' => 'Malaysia', 'code' => 'MY'],

            ['name' => 'Maldives', 'code' => 'MV'],

            ['name' => 'Mali', 'code' => 'ML'],

            ['name' => 'Malta', 'code' => 'MT'],

            ['name' => 'Marshall Islands', 'code' => 'MH'],

            ['name' => 'Martinique', 'code' => 'MQ'],

            ['name' => 'Mauritania', 'code' => 'MR'],

            ['name' => 'Mauritius', 'code' => 'MU'],

            ['name' => 'Mayotte', 'code' => 'YT'],

            ['name' => 'Mexico', 'code' => 'MX'],

            ['name' => 'Micronesia, Federated States of', 'code' => 'FM'],

            ['name' => 'Moldova, Republic of', 'code' => 'MD'],

            ['name' => 'Monaco', 'code' => 'MC'],

            ['name' => 'Mongolia', 'code' => 'MN'],

            ['name' => 'Montenegro', 'code' => 'ME'],

            ['name' => 'Montserrat', 'code' => 'MS'],

            ['name' => 'Morocco', 'code' => 'MA'],

            ['name' => 'Mozambique', 'code' => 'MZ'],

            ['name' => 'Myanmar', 'code' => 'MM'],

            ['name' => 'Namibia', 'code' => 'NA'],

            ['name' => 'Nauru', 'code' => 'NR'],

            ['name' => 'Nepal', 'code' => 'NP'],

            ['name' => 'Netherlands', 'code' => 'NL'],

            ['name' => 'New Caledonia', 'code' => 'NC'],

            ['name' => 'New Zealand', 'code' => 'NZ'],

            ['name' => 'Nicaragua', 'code' => 'NI'],

            ['name' => 'Niger', 'code' => 'NE'],

            ['name' => 'Nigeria', 'code' => 'NG'],

            ['name' => 'Niue', 'code' => 'NU'],

            ['name' => 'Norfolk Island', 'code' => 'NF'],

            ['name' => 'Northern Mariana Islands', 'code' => 'MP'],

            ['name' => 'Norway', 'code' => 'NO'],

            ['name' => 'Oman', 'code' => 'OM'],

            ['name' => 'Pakistan', 'code' => 'PK'],

            ['name' => 'Palau', 'code' => 'PW'],

            ['name' => 'Palestine, State of', 'code' => 'PS'],

            ['name' => 'Panama', 'code' => 'PA'],

            ['name' => 'Papua New Guinea', 'code' => 'PG'],

            ['name' => 'Paraguay', 'code' => 'PY'],

            ['name' => 'Peru', 'code' => 'PE'],

            ['name' => 'Philippines', 'code' => 'PH'],

            ['name' => 'Pitcairn', 'code' => 'PN'],

            ['name' => 'Poland', 'code' => 'PL'],

            ['name' => 'Portugal', 'code' => 'PT'],

            ['name' => 'Puerto Rico', 'code' => 'PR'],

            ['name' => 'Qatar', 'code' => 'QA'],

            ['name' => 'Réunion', 'code' => 'RE'],

            ['name' => 'Romania', 'code' => 'RO'],

            ['name' => 'Russian Federation', 'code' => 'RU'],

            ['name' => 'Rwanda', 'code' => 'RW'],

            ['name' => 'Saint Barthélemy', 'code' => 'BL'],

            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH'],

            ['name' => 'Saint Kitts and Nevis', 'code' => 'KN'],

            ['name' => 'Saint Lucia', 'code' => 'LC'],

            ['name' => 'Saint Martin (French part)', 'code' => 'MF'],

            ['name' => 'Saint Pierre and Miquelon', 'code' => 'PM'],

            ['name' => 'Saint Vincent and the Grenadines', 'code' => 'VC'],

            ['name' => 'Samoa', 'code' => 'WS'],

            ['name' => 'San Marino', 'code' => 'SM'],

            ['name' => 'Sao Tome and Principe', 'code' => 'ST'],

            ['name' => 'Saudi Arabia', 'code' => 'SA'],

            ['name' => 'Senegal', 'code' => 'SN'],

            ['name' => 'Serbia', 'code' => 'RS'],

            ['name' => 'Seychelles', 'code' => 'SC'],

            ['name' => 'Sierra Leone', 'code' => 'SL'],

            ['name' => 'Singapore', 'code' => 'SG'],

            ['name' => 'Sint Maarten (Dutch part)', 'code' => 'SX'],

            ['name' => 'Slovakia', 'code' => 'SK'],

            ['name' => 'Slovenia', 'code' => 'SI'],

            ['name' => 'Solomon Islands', 'code' => 'SB'],

            ['name' => 'Somalia', 'code' => 'SO'],

            ['name' => 'South Africa', 'code' => 'ZA'],

            ['name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS'],

            ['name' => 'South Sudan', 'code' => 'SS'],

            ['name' => 'Spain', 'code' => 'ES'],

            ['name' => 'Sri Lanka', 'code' => 'LK'],

            ['name' => 'Sudan', 'code' => 'SD'],

            ['name' => 'Suriname', 'code' => 'SR'],

            ['name' => 'Svalbard and Jan Mayen', 'code' => 'SJ'],

            ['name' => 'Swaziland', 'code' => 'SZ'],

            ['name' => 'Sweden', 'code' => 'SE'],

            ['name' => 'Switzerland', 'code' => 'CH'],

            ['name' => 'Syrian Arab Republic', 'code' => 'SY'],

            ['name' => 'Taiwan', 'code' => 'TW'],

            ['name' => 'Tajikistan', 'code' => 'TJ'],

            ['name' => 'Tanzania, United Republic of', 'code' => 'TZ'],

            ['name' => 'Thailand', 'code' => 'TH'],

            ['name' => 'Timor-Leste', 'code' => 'TL'],

            ['name' => 'Togo', 'code' => 'TG'],

            ['name' => 'Tokelau', 'code' => 'TK'],

            ['name' => 'Tonga', 'code' => 'TO'],

            ['name' => 'Trinidad and Tobago', 'code' => 'TT'],

            ['name' => 'Tunisia', 'code' => 'TN'],

            ['name' => 'Turkey', 'code' => 'TR'],

            ['name' => 'Turkmenistan', 'code' => 'TM'],

            ['name' => 'Turks and Caicos Islands', 'code' => 'TC'],

            ['name' => 'Tuvalu', 'code' => 'TV'],

            ['name' => 'Uganda', 'code' => 'UG'],

            ['name' => 'Ukraine', 'code' => 'UA'],

            ['name' => 'United Arab Emirates', 'code' => 'AE'],

            ['name' => 'United Kingdom', 'code' => 'GB'],

            ['name' => 'United States', 'code' => 'US'],

            ['name' => 'United States Minor Outlying Islands', 'code' => 'UM'],

            ['name' => 'Uruguay', 'code' => 'UY'],

            ['name' => 'Uzbekistan', 'code' => 'UZ'],

            ['name' => 'Vanuatu', 'code' => 'VU'],

            ['name' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE'],

            ['name' => 'Viet Nam', 'code' => 'VN'],

            ['name' => 'Virgin Islands, British', 'code' => 'VG'],

            ['name' => 'Virgin Islands, U.S.', 'code' => 'VI'],

            ['name' => 'Wallis and Futuna', 'code' => 'WF'],

            ['name' => 'Western Sahara', 'code' => 'EH'],

            ['name' => 'Yemen', 'code' => 'YE'],

            ['name' => 'Zambia', 'code' => 'ZM'],

            ['name' => 'Zimbabwe', 'code' => 'ZW'],

        ];

          

        foreach ($countries as $key => $value) {

            Country::create($value);

        }

    }

}

now let's run seeder:

php artisan db:seed --class=CountrySeeder

Step 4: Create Route

In this is step we need to create some routes for add to cart function.

routes/web.php

<?php

  

use Illuminate\Support\Facades\Route;

  

use App\Http\Controllers\CountryController;

  

/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/

  

Route::get('form', [CountryController::class, 'index']);

Step 5: Create Controller

in this step, we need to create CountryController and add following code on that file:

app/Http/Controllers/CountryController.php

<?php

  

namespace App\Http\Controllers;

  

use Illuminate\Http\Request;

use App\Models\Country;

  

class CountryController extends Controller

{

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function index()

    {

        $countries = Country::all();

        return view('country',compact('countries'));

    }

}

Step 6: Create Blade Files

here, we need to create blade files for country. so let's create one by one files:

resources/views/country.blade.php

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <title></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  

<div class="container">

    <div class="row">

        <div class="col-md-6 mx-auto">

            <div class="card">

                <div class="card-body">

                    <div class="mb-3">

                        <h2>Registration</h2>

                    </div>

                    <div class="mb-3">

                        <label for="name" class="form-label">Name:</label>

                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

                    </div>

                    <div class="mb-3">

                        <label for="exampleInputEmail1" class="form-label">Email:</label>

                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <div class="mb-3">

                        <label for="password" class="form-label">Password:</label>

                        <input type="password" class="form-control" id="password" aria-describedby="emailHelp">

                    </div>

                    <div class="mb-3">

                        <label for="password" class="form-label">Select Country:</label>

                        <select class="form-select">

                            @foreach ($countries as $country)

                                <option value="{{$country->id}}">{{$country->name}} - {{$country->code}}</option>

                            @endforeach

                        </select>

                    </div>

                    <div class="mb-3">

                        <button class="btn btn-success">Submit</button>

                    </div>

                </div>

            </div>

        </div>

     </div>

</div>

  

</body>

</html>

Now we are ready to run our example so run bellow command so quick run:

php artisan serve
