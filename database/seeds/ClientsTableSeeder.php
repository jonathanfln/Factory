<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create( [
            'name'=>'Zaki Ch',
            'company'=>'Molengeek',
            'image'=>'HapOlIUKGzMwNHHcq9nLDf4RvlPMMnpU3INMV5Pb.jpeg',
            'created_at'=>'2018-08-01 06:19:34',
            'updated_at'=>'2018-08-01 06:19:34'
        ] );
                        
        Client::create( [
            'name'=>'Sara Lou',
            'company'=>'Molengeek',
            'image'=>'DksYmeXbtQby9OdeLE2TK4sFipJsxYzwbidNFns2.jpeg',
            'created_at'=>'2018-08-01 06:19:48',
            'updated_at'=>'2018-08-01 06:19:48'
        ] );
                        
        Client::create( [
            'name'=>'Simon Gheux',
            'company'=>'EASI',
            'image'=>'VrbIK5TK78Es2UIDzWKj54rEZgJxq2Li56A8cGno.jpeg',
            'created_at'=>'2018-08-01 06:59:04',
            'updated_at'=>'2018-08-01 06:59:04'
        ] );
                        
        Client::create( [
            'name'=>'Adnane Bent',
            'company'=>'Molengeek',
            'image'=>'zf8thgb7znMJh9tYljlSyTO9aGIrHILTGoC64CEd.jpeg',
            'created_at'=>'2018-08-01 06:59:32',
            'updated_at'=>'2018-08-01 06:59:32'
        ] );
    }
}
