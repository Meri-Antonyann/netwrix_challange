<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loc_state', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('short_name');
            $table->unsignedBigInteger('country_id');
        });

        
        DB::statement("
        INSERT INTO `loc_state` (`id`, `name`, `short_name`, `country_id`) VALUES
        (1, '[Nation Wide]', 'nostate', 226),
        (2, 'Alabama', 'AL', 226),
        (3, 'Alaska', 'AK', 226),
        (4, 'American Samoa', 'AS', 226),
        (5, 'Arizona', 'AZ', 226),
        (6, 'Arkansas', 'AR', 226),
        (7, 'California', 'CA', 226),
        (8, 'Colorado', 'CO', 226),
        (9, 'Connecticut', 'CT', 226),
        (10, 'Delaware', 'DE', 226),
        (11, 'District of Columbia', 'DC', 226),
        (12, 'Florida', 'FL', 226),
        (13, 'Georgia', 'GA', 226),
        (14, 'Guam', 'GU', 226),
        (15, 'Hawaii', 'HI', 226),
        (16, 'Idaho', 'ID', 226),
        (17, 'Illinois', 'IL', 226),
        (18, 'Indiana', 'IN', 226),
        (19, 'Iowa', 'IA', 226),
        (20, 'Kansas', 'KS', 226),
        (21, 'Kentucky', 'KY', 226),
        (22, 'Louisiana', 'LA', 226),
        (23, 'Maine', 'ME', 226),
        (24, 'Marshall Islands', 'MH', 226),
        (25, 'Maryland', 'MD', 226),
        (26, 'Massachusetts', 'MA', 226),
        (27, 'Michigan', 'MI', 226),
        (28, 'Minnesota', 'MN', 226),
        (29, 'Mississippi', 'MS', 226),
        (30, 'Missouri', 'MO', 226),
        (31, 'Montana', 'MT', 226),
        (32, 'Nebraska', 'NE', 226),
        (33, 'Nevada', 'NV', 226),
        (34, 'New Hampshire', 'NH', 226),
        (35, 'New Jersey', 'NJ', 226),
        (36, 'New Mexico', 'NM', 226),
        (37, 'New York', 'NY', 226),
        (38, 'North Carolina', 'NC', 226),
        (39, 'North Dakota', 'ND', 226),
        (40, 'Northern Mariana Islands', 'MP', 226),
        (41, 'Ohio', 'OH', 226),
        (42, 'Oklahoma', 'OK', 226),
        (43, 'Oregon', 'OR', 226),
        (44, 'Palau', 'PW', 226),
        (45, 'Pennsylvania', 'PA', 226),
        (46, 'Puerto Rico', 'PR', 226),
        (47, 'Rhode Island', 'RI', 226),
        (48, 'South Carolina', 'SC', 226),
        (49, 'South Dakota', 'SD', 226),
        (50, 'Tennessee', 'TN', 226),
        (51, 'Texas', 'TX', 226),
        (52, 'Utah', 'UT', 226),
        (53, 'Vermont', 'VT', 226),
        (54, 'Virgin Islands', 'VI', 226),
        (55, 'Virginia', 'VA', 226),
        (56, 'Washington', 'WA', 226),
        (57, 'West Virginia', 'WV', 226),
        (58, 'Wisconsin', 'WI', 226),
        (59, 'Wyoming', 'WY', 226),
        (60, '[Nation Wide]', 'nostate', 38),
        (61, 'Alberta', 'AB', 38),
        (62, 'British Columbia', 'BC', 38),
        (63, 'Manitoba', 'MB', 38),
        (64, 'New Brunswick', 'NB', 38),
        (65, 'Newfoundland and Labrador', 'NL', 38),
        (66, 'Northwest Territories', 'NT', 38),
        (67, 'Nova Scotia', 'NS', 38),
        (68, 'Nunavut', 'NU', 38),
        (69, 'Ontario', 'ON', 38),
        (70, 'Prince Edward Island', 'PE', 38),
        (71, 'Quebec', 'QC', 38),
        (72, 'Saskatchewan', 'SK', 38),
        (73, 'Yukon Territory', 'YT', 38),
        (75, 'Andaman and Nicobar Islands', 'AN', 98),
        (76, 'Andhra Pradesh', 'AP', 98),
        (77, 'Arunachal Pradesh', 'AR', 98),
        (78, 'Assam', 'AS', 98),
        (79, 'Bihar', 'BR', 98),
        (80, 'Chandigarh', 'CH', 98),
        (81, 'Chhattisgarh', 'CT', 98),
        (82, 'Dadra and Nagar Haveli', 'DN', 98),
        (83, 'Daman and Diu', 'DD', 98),
        (84, 'Delhi', 'DL', 98),
        (85, 'Goa', 'GA', 98),
        (86, 'Gujarat', 'GJ', 98),
        (87, 'Haryana', 'HR', 98),
        (88, 'Himachal Pradesh', 'HP', 98),
        (89, 'Jammu and Kashmir', 'JK', 98),
        (90, 'Jharkhand', 'JH', 98),
        (91, 'Karnataka', 'KA', 98),
        (92, 'Kerala', 'KL', 98),
        (93, 'Lakshadweep', 'LD', 98),
        (94, 'Madhya Pradesh', 'MP', 98),
        (95, 'Maharashtra', 'MH', 98),
        (96, 'Manipur', 'MN', 98),
        (97, 'Meghalaya', 'ML', 98),
        (98, 'Mizoram', 'MZ', 98),
        (99, 'Nagaland', 'NL', 98),
        (100, 'Odisha', 'OR', 98),
        (101, 'Puducherry', 'PY', 98),
        (102, 'Punjab', 'PB', 98),
        (103, 'Rajasthan', 'RJ', 98),
        (104, 'Sikkim', 'SK', 98),
        (105, 'Tamil Nadu', 'TN', 98),
        (106, 'Telangana', 'TG', 98),
        (107, 'Tripura', 'TR', 98),
        (108, 'Uttar Pradesh', 'UP', 98),
        (109, 'Uttarakhand', 'UT', 98),
        (110, 'West Bengal', 'WB', 98);
    
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loc_state');
    }
};
