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
        
            DB::table('users')->insert([
                'username'   => $faker->userName,
                'password'    => Hash::make('123456'),
                'fullname'      =>  $faker->name,
                'phone'  => $faker->phoneNumber,
                'email'      => 'laocongtien@gmail.com',
                'avatar'     => 'public/upload/user/ava2.jpg',
                'coin'     =>   $faker->numberBetween(0,3000),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
            DB::table('users')->insert([
                'username'   => $faker->userName,
                'password'    => Hash::make('123456'),
                'fullname'      =>  $faker->name,
                'phone'  => $faker->phoneNumber,
                'email'      => $faker->freeEmail,
                'avatar'     => 'public/upload/user/ava2.jpg',
                'coin'     =>   $faker->numberBetween(0,3000),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
            DB::table('users')->insert([
                'username'   => $faker->userName,
                'password'    => Hash::make('123456'),
                'fullname'      =>  $faker->name,
                'phone'  => $faker->phoneNumber,
                'email'      => $faker->freeEmail,
                'avatar'     => 'public/upload/user/ava3.jpg',
                'coin'     =>   $faker->numberBetween(0,3000),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        
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
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Học - Tiểu Thuyết",
        'parent_id' => "", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kinh tế", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Truyện", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kỹ Năng", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kỹ Năng Sống",
        'parent_id' => "5", 
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Sách Giáo Khoa", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kỹ Năng Mềm", 
        'parent_id' => "5",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Học Tình Cảm Lãng Mạn", 
        'parent_id' => "2",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Kinh Doanh - Đầu Tư", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Sách Kinh Điển", 
        'parent_id' => "2",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Văn Hóa - Xã Hội", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Danh Nhân", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Chính Trị", 
        'parent_id' => "",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
        ],[
        'name' => "Trinh Thám - Kinh Dị", 
        'parent_id' => "2",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Thiếu Nhi", 
        'parent_id' => "4",
        'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
        'updated_at' => $faker->dateTimeBetween('-1 days', 'now') 
        ],[
        'name' => "Truyện Ngắn", 
        'parent_id' => "4",
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
        foreach (range(1,30) as $temp){
            DB::table('authors')->insert([
                'name'  => $faker->name, 
                'realname'    =>    $faker->name,
                'years'    =>   $faker->numberBetween(1900,2000),
                'info'  => $faker->text(200),
                'avatar' => "public/upload/author/athava".$faker->numberBetween(1,4).".jpg",
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
        foreach (range(1,30) as $index){
            DB::table('issuers')->insert([
                'name' => $faker->company(),
                'fullname' => $faker->company(),
                'location'  => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'fax' => $faker->phoneNumber(),
                'logo'      => 'public/upload/issuer/cty'.$faker->numberBetween(1,8).".png",
                'email' => $faker->email(),
                'website' => $faker->domainName(),
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
        foreach (range(1,30) as $index){
            DB::table('publishers')->insert([
                'name' => $faker->company(),
                'fullname' => $faker->company(),
                'location'  => $faker->address(),
                'phone' => $faker->phoneNumber(),
                'fax' => $faker->phoneNumber(),
                'logo'      => 'public/upload/publisher/nxb'.$faker->numberBetween(1,9).".png",
                'email' => $faker->email(),
                'website' => $faker->domainName(),
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
                'street' => $faker->streetName,
                'province_id' => 10,
                'district_id'   => 4,
                'ward_id' => 28,
                'default' => 1,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
         DB::table('locations')->insert([
                'user_id' => '1',
                'house_number' => $faker->buildingNumber,
                'street' => $faker->streetName,
                'province_id' => 12,
                'district_id'   => 271,
                'ward_id' => 67,
                'default' => 0,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
          DB::table('locations')->insert([
                'user_id' => '1',
                'house_number' => $faker->buildingNumber,
                'street' => $faker->streetName,
                'province_id' => 68,
                'district_id'   => 20,
                'ward_id' => 520,
                'default' => 0,
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
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
        foreach (range(1,100) as $index){
            DB::table('books')->insert([
                'name' => $faker->name,
                'author_id' => $faker->numberBetween(1,30),
                'price' => 1000*$faker->numberBetween(20,300),
                'discount'  => $faker->numberBetween(20,30),
                'invent'    => $faker->numberBetween(0,10),
                'publishing_date' =>    $faker->dateTimeBetween('-1 months', '1 months'),
                'issuer_id' => $faker->numberBetween(1,30),
                'publisher_id' =>   $faker->numberBetween(1,30),
                'cate_id'   =>  $faker->numberBetween(1,8),
                'language_id'   => $faker->numberBetween(1,2),
                'size'  => $faker->numberBetween(10,20).' x '.$faker->numberBetween(10,20),
                'cover_id' => $faker->numberBetween(3,4),
                'image' =>  'public/upload/book/book'.$faker->numberBetween(1,12).".jpg",
                'page'  =>  $faker->numberBetween(50,450),
                'info' =>   $faker->text(10000),
                'rate' => $faker->randomFloat(2,0,5),
                'rateCount' => $faker->numberBetween(0,1000),
                'qty_saled' => $faker->numberBetween(0,301000),
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
                'user_id' => $faker->numberBetween(1,3),
                'book_id'=>$faker->numberBetween(1,100),
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
                'book_id'=> $faker->numberBetween(1,100),
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
                'user_id' =>$faker->numberBetween(1,3),
                'book_id' => $faker->numberBetween(1,100),
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
                'user_id' => $faker->numberBetween(1,3),
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
                'book_id'     => $faker->numberBetween(1,100),
                'qty'    => $faker->numberBetween(1,10),
                'created_at' => $faker->dateTimeBetween('-3 days','-1 days'),
                'updated_at' => $faker->dateTimeBetween('-1 days', 'now')
            ]);
        }
    }
}