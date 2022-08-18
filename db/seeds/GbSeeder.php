<?php


use Phinx\Seed\AbstractSeed;

class GbSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $sql = 'TRUNCATE cart';
        $this->adapter->query($sql);
        $sql = 'TRUNCATE goods';
        $this->adapter->query($sql);
        $sql = 'TRUNCATE users';
        $this->adapter->query($sql);

        $products = [
            [
                'product_name' => 'Product 1',
                'price' => '100',
                'product_img' => 'product-01.jpg',
                'description' => 'Description product 1',
                'views' => '0'
            ],
            [
                'product_name' => 'Product 2',
                'price' => '200',
                'product_img' => 'product-02.jpg',
                'description' => 'Description product 2',
                'views' => '0'
            ],
            [
                'product_name' => 'Product 3',
                'price' => '300',
                'product_img' => 'product-03.jpg',
                'description' => 'Description product 3',
                'views' => '0'
            ],
            [
                'product_name' => 'Product 4',
                'price' => '400',
                'product_img' => 'product-04.jpg',
                'description' => 'Description product 4',
                'views' => '0'
            ],
        ];
        $this->table('goods')->insert($goods)->save();

        $users = [
            [
                'login' => 'admin',
                'pass' => password_hash('123', PASSWORD_DEFAULT),
                'role' => 1
            ],
            [
                'login' => 'Путята',
                'pass' => password_hash('321', PASSWORD_DEFAULT),
                'role' => 2
            ],

        ];
        $this->table('users')->insert($users)->save();

    }
}
