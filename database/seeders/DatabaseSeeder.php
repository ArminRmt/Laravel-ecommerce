<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Admin::factory()->create();


        Admin::factory()->times(1)->create();

        // $this->call(sessions::class);
        // $this->call(admins::class);
        // $this->call(brands::class);
        // $this->call(categories::class);
        // $this->call(sub_categories::class);
        // $this->call(sub_sub_categories::class);
        // $this->call(multi_imgs::class);
        // $this->call(wishlists::class);
        // $this->call(coupons::class);
        // $this->call(ship_divisions::class);
        // $this->call(ship_districts::class);
        // $this->call(orders::class);
        // $this->call(order_items::class);
        // $this->call(blog_post_categories::class);
        // $this->call(blog_posts::class);
        // $this->call(site_settings::class);
        // $this->call(seos::class);
        // $this->call(reviews::class);
        // $this->call(users::class);
    }
}


// aseeder sessions
// aseeder admins
// aseeder brands
// aseeder categories
// aseeder sub_categories
// aseeder sub_sub_categories
// aseeder multi_imgs
// aseeder wishlists
// aseeder coupons
// aseeder ship_divisions
// aseeder ship_districts
// aseeder ship_states
// aseeder orders
// aseeder order_items
// aseeder blog_post_categories
// aseeder blog_posts
// aseeder site_settings
// aseeder seos
// aseeder reviews
// aseeder users








// afactory sessions
// afactory admins
// afactory brands
// afactory categories
// afactory sub_categories
// afactory sub_sub_categories
// afactory multi_imgs
// afactory wishlists
// afactory coupons
// afactory ship_divisions
// afactory ship_districts
// afactory ship_states
// afactory orders
// afactory order_items
// afactory blog_post_categories
// afactory blog_posts
// afactory site_settings
// afactory seos
// afactory reviews
// afactory users