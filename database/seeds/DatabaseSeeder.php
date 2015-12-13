<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(UserSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CateSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(IssuerSeeder::class);
        $this->call(PublisherSeeder::class);
        $this->call(OtherSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(OrderDetailSeeder::class);
        $this->call(WishlistSeeder::class);
        $this->call(CoinSeeder::class);
        $this->call(NotificationSeeder::class);
        $this->call(CartSeeder::class);

        Model::reguard();
    }
}

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('users')->insert([
                'username'   => $faker->userName,
                'password'    => $faker->password,
                'fullname'      =>  $faker->name,
                'phone'  => $faker->phoneNumber,
                'email'      => $faker->freeEmail,
                'avatar'     => 'hinh'.$index,
                'coin'     =>   $faker->numberBetween(0,3000),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $insert = [[
        'name' => "Kỹ Năng Mềm", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Học Tình Cảm Lãng Mạn", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kinh Doanh - Đầu Tư", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Sách Kinh Điển", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Hóa - Xã Hội", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Danh Nhân", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Chính Trị", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Trinh Thám - Kinh Dị", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Thiếu Nhi", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Truyện Ngắn", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ]];
        DB::table('types')->insert($insert);

    }
}

class CateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $insert = [[
        'name' => "Sách Tiếng Anh", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Học - Tiểu Thuyết", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kinh tế", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kỹ Năng Sống", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Sách Giáo Khoa", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ]];
        DB::table('cates')->insert($insert);

    }
}

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,10) as $temp){
            DB::table('authors')->insert([
                'name'  => $faker->name, 
                'realname'    =>    $faker->name,
                'years'    =>   $faker->numberBetween(1900,2000),
                'info'  => $faker->text(200),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
                ]);
        };
    }
}

class IssuerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('issuers')->insert([
                'name' => $faker->company(),
                'info' => $faker->text(60),
                'logo'      => 'logo'.$index,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('publishers')->insert([
                'name' => $faker->company(),
                'info' => $faker->text(60),
                'logo'      => 'nxb'.$index,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }     }
}

class OtherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $insert = [[
        'value' => "Tiếng Việt", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'value' => "Tiếng Anh", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'value' => "Bìa Cứng", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'value' => "Bìa Mềm", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ]];

        DB::table('others')->insert($insert);
    
    }
}

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        DB::table('locations')->insert([
                'user_id' => '1',
                'house_number' => $faker->buildingNumber,
                'shreet' => $faker->streetName,
                'province_id' => $faker->numberBetween(1,63),
                'district_id'   => $faker->numberBetween(1,100),
                'ward_id' => $faker->numberBetween(1,100),
                'default' => 1,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        foreach (range(1,10) as $index){
            DB::table('locations')->insert([
                'user_id' => '1',
                'house_number' => $faker->buildingNumber,
                'shreet' => $faker->streetName,
                'province_id' => $faker->numberBetween(1,63),
                'district_id'   => $faker->numberBetween(1,100),
                'ward_id' => $faker->numberBetween(1,100),
                'default' => 0,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('books')->insert([
                'name' => $faker->name,
                'author_id' => $faker->numberBetween(1,10),
                'price' => 1000*$faker->numberBetween(20,300),
                'discount'  => $faker->numberBetween(20,30),
                'invent'    => $faker->numberBetween(0,10),
                'publishing_date' =>    $faker->dateTimeBetween('-1 months', '1 weeks'),
                'issuer_id' => $faker->numberBetween(1,20),
                'publisher_id' =>   $faker->numberBetween(1,20),
                'type_id'   =>  $faker->numberBetween(1,10),
                'cate_id'   =>  $faker->numberBetween(1,5),
                'language_id'   => $faker->numberBetween(1,2),
                'size'  => $faker->numberBetween(10,20).' x '.$faker->numberBetween(10,20),
                'cover_id' => $faker->numberBetween(3,4),
                'image' =>  'sach'.$index,
                'page'  =>  $faker->numberBetween(50,450),
                'info' =>   $faker->text(150),
                'rate' => $faker->randomFloat(2,0,5),
                'rateCount' => $faker->numberBetween(0,1000),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('comments')->insert([
                'user_id' => $faker->numberBetween(1,20),
                'book_id'=>$faker->numberBetween(1,20),
                'title'=>$faker->randomElement(['Tuyệt','Hay','Dở']),
                'content'=>$faker->text(30),
                'rate'=>$faker->numberBetween(0,5),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            $tien = 1000*$faker->numberBetween(30,500);
            DB::table('orders')->insert([
                'user_id' => $faker->numberBetween(1,2),
                'location' => $faker->address,
                'note' => $faker->sentence(10),
                'total' => $tien,
                'status' => $faker->randomElement(['Đã giao hàng thành công','Đã hủy','Đang xử lý','Đã chấp nhận']),
                'coin_receive' => $tien/100000,
                'coin_use' => 100*$faker->numberBetween(2,30),
                'shipping_method' => $faker->randomElement(['Giao hàng trực tiếp','Giao hàng qua bưu điện']),
                'payment_method'    => $faker->randomElement(['Thanh toán khi nhận hàng','Chuyển khoản qua ngân hàng']),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('order_details')->insert([
                'order_id'=> $faker->numberBetween(1,20),
                'book_id'=> $faker->numberBetween(1,20),
                'qty'=>$faker->randomDigit,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('wishlists')->insert([
                'user_id' =>$faker->numberBetween(1,20),
                'book_id' => $faker->numberBetween(1,20),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class CoinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('coins')->insert([
                'order_id'  =>  $faker->numberBetween(1,20),
                'coin'         =>   100*$faker->numberBetween(0,10),
                'status'  => $faker->numberBetween(0,1),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('notifications')->insert([
                'user_id' => $faker->numberBetween(1,20),
                'title'      => $faker->randomElement(['Thông báo đơn hàng','Thông báo khuyến mãi']),
                'content'     => $faker->text(100),
                'star'        => $faker->numberBetween(0,1),
                'read'        => $faker->numberBetween(0,1),
                'created_at'  => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at'  => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        foreach (range(1,20) as $index){
            DB::table('carts')->insert([
                'book_id'     => $faker->numberBetween(1,20),
                'qty'    => $faker->numberBetween(1,10),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}