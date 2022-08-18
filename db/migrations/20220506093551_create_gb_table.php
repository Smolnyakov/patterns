<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class CreateGbTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $this->table('goods')
            ->addColumn('product_name', 'text')
            ->addColumn('price', 'integer')
            ->addColumn('product_img', 'text')
            ->addColumn('description', 'text')
            ->addColumn('views', 'integer')
            ->create();

        $this->table('cart')
            ->addColumn('session_id', 'text')
            ->addColumn('product_id', 'integer')
            ->create();

        $this->table('users')
            ->addColumn('login', 'text')
            ->addColumn('pass', 'text')
            ->create();

        $this->table('orders')
            ->addColumn('user_session', 'text')
            ->addColumn('user_name', 'text')
            ->addColumn('user_surname', 'text')
            ->addColumn('phone', 'text')
            ->addColumn('status', 'text')
            ->addColumn('total_price', 'text')
            ->create();
    }
}
