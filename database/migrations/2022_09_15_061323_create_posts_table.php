<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title',255);
            $table->text('content');
        });
        DB::table('posts')->insert(
            array(
                'user_id' => '1',
                'title' => '5 drinks to combine with mother nature',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dolor purus non enim praesent elementum facilisis leo vel. Vulputate enim nulla aliquet porttitor lacus luctus. Sed augue lacus viverra vitae congue eu consequat. Eu ultrices vitae auctor eu augue ut lectus arcu. Neque vitae tempus quam pellentesque. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Pellentesque habitant morbi tristique senectus et netus et. Sed cras ornare arcu dui vivamus arcu felis bibendum ut. Eu consequat ac felis donec. Amet nulla facilisi morbi tempus iaculis urna id. Senectus et netus et malesuada fames ac turpis. Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque.'

            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '1',
                'title' => '10 facts you didn’t know aboutmother nature',
                'content' => 'Risus quis varius quam quisque. Consectetur libero id faucibus nisl tincidunt eget nullam non nisi. Tortor pretium viverra suspendisse potenti nullam ac. Volutpat blandit aliquam etiam erat velit scelerisque in. In hac habitasse platea dictumst quisque sagittis purus sit amet. Bibendum enim facilisis gravida neque convallis a cras. Sollicitudin tempor id eu nisl nunc. Vel orci porta non pulvinar. Ultricies tristique nulla aliquet enim tortor at auctor urna nunc. Auctor elit sed vulputate mi sit amet mauris commodo. Nulla pharetra diam sit amet nisl suscipit adipiscing bibendum est. Ut placerat orci nulla pellentesque dignissim enim sit amet.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '2',
                'title' => 'Never trust articles about mothernature and here’s why',
                'content' => 'Porta nibh venenatis cras sed felis eget velit aliquet. Diam volutpat commodo sed egestas egestas fringilla phasellus. Nulla facilisi cras fermentum odio eu. Phasellus vestibulum lorem sed risus ultricies tristique nulla. Natoque penatibus et magnis dis. Molestie at elementum eu facilisis sed odio morbi quis. Pellentesque nec nam aliquam sem et tortor consequat id porta. Feugiat nibh sed pulvinar proin gravida. Nunc sed velit dignissim sodales ut eu sem integer. Tincidunt arcu non sodales neque sodales ut etiam sit. Orci a scelerisque purus semper. Donec et odio pellentesque diam volutpat commodo sed. Sed risus pretium quam vulputate dignissim suspendisse in est ante. Mi sit amet mauris commodo. Eu ultrices vitae auctor eu.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '2',
                'title' => 'Why mother nature will make youforget about everything',
                'content' => 'Volutpat blandit aliquam etiam erat velit scelerisque. Et leo duis ut diam. Lorem sed risus ultricies tristique nulla aliquet enim tortor. Id semper risus in hendrerit gravida rutrum quisque non. Pharetra massa massa ultricies mi quis hendrerit dolor magna eget. Egestas pretium aenean pharetra magna ac placerat vestibulum lectus mauris. Sed nisi lacus sed viverra tellus in. Suscipit tellus mauris a diam maecenas sed enim ut sem. Amet consectetur adipiscing elit pellentesque. Sed odio morbi quis commodo odio aenean sed. Felis bibendum ut tristique et. Eget gravida cum sociis natoque penatibus et magnis dis parturient.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '3',
                'title' => 'Apple pie',
                'content' => 'Tincidunt arcu non sodales neque sodales ut. Vivamus at augue eget arcu dictum varius duis. Eu mi bibendum neque egestas congue quisque. Tellus in metus vulputate eu scelerisque felis imperdiet. Fermentum odio eu feugiat pretium nibh ipsum consequat nisl. Suscipit tellus mauris a diam. Risus quis varius quam quisque id diam vel quam elementum. Lobortis feugiat vivamus at augue eget. Odio facilisis mauris sit amet massa vitae tortor condimentum lacinia. Nisi est sit amet facilisis magna. Hendrerit gravida rutrum quisque non tellus orci ac.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '3',
                'title' => 'Where is the bus?',
                'content' => 'Fusce ut placerat orci nulla pellentesque. Posuere morbi leo urna molestie. Varius vel pharetra vel turpis nunc eget lorem. Adipiscing diam donec adipiscing tristique. Ut sem viverra aliquet eget sit. Tempus imperdiet nulla malesuada pellentesque. Euismod in pellentesque massa placerat duis ultricies lacus sed turpis. Id aliquet risus feugiat in ante metus dictum at. Tortor dignissim convallis aenean et tortor. Quam adipiscing vitae proin sagittis nisl.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '3',
                'title' => 'Thinking in love',
                'content' => 'Mattis pellentesque id nibh tortor id aliquet lectus proin. Risus nullam eget felis eget nunc lobortis. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat. Blandit turpis cursus in hac habitasse platea. Fames ac turpis egestas integer eget aliquet nibh praesent tristique. Ultricies tristique nulla aliquet enim tortor at auctor urna. Neque ornare aenean euismod elementum nisi quis. Nisl vel pretium lectus quam id leo in. Amet luctus venenatis lectus magna fringilla urna porttitor. Sem et tortor consequat id. Aliquet lectus proin nibh nisl condimentum id venenatis. Ultrices gravida dictum fusce ut placerat orci nulla. Ac ut consequat semper viverra nam libero justo. Semper auctor neque vitae tempus quam pellentesque nec nam aliquam.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '4',
                'title' => 'Family is worthy',
                'content' => 'Quis viverra nibh cras pulvinar mattis nunc. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Viverra justo nec ultrices dui sapien eget. Nibh ipsum consequat nisl vel pretium lectus quam. Libero enim sed faucibus turpis in eu mi. Semper auctor neque vitae tempus quam pellentesque. Felis bibendum ut tristique et. Sit amet nisl purus in mollis nunc sed id. Nec ullamcorper sit amet risus. In dictum non consectetur a erat nam at. Tincidunt praesent semper feugiat nibh sed. Quis blandit turpis cursus in hac habitasse platea dictumst. Massa vitae tortor condimentum lacinia quis vel. Rutrum quisque non tellus orci ac auctor augue. Enim lobortis scelerisque fermentum dui faucibus in ornare quam. Faucibus turpis in eu mi bibendum neque egestas congue. Lacus viverra vitae congue eu consequat.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '4',
                'title' => 'I hope you are having a nice day',
                'content' => 'Quam adipiscing vitae proin sagittis nisl rhoncus. Gravida in fermentum et sollicitudin ac orci phasellus. Lorem ipsum dolor sit amet consectetur. Amet tellus cras adipiscing enim eu turpis egestas. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit. Nisi quis eleifend quam adipiscing vitae proin. Praesent tristique magna sit amet purus gravida quis blandit. Ornare massa eget egestas purus viverra accumsan in nisl nisi. Mauris a diam maecenas sed enim ut sem viverra aliquet. Lobortis feugiat vivamus at augue eget arcu dictum varius. Purus semper eget duis at tellus at urna. Ullamcorper velit sed ullamcorper morbi tincidunt ornare massa eget. Suspendisse sed nisi lacus sed viverra tellus in hac habitasse. Nisl vel pretium lectus quam id leo in vitae turpis. Urna duis convallis convallis tellus id interdum velit laoreet. Amet commodo nulla facilisi nullam vehicula. Rutrum quisque non tellus orci ac auctor. Aliquet sagittis id consectetur purus.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '4',
                'title' => 'That is the way',
                'content' => 'Arcu dui vivamus arcu felis. Eget est lorem ipsum dolor sit amet consectetur adipiscing. Nec sagittis aliquam malesuada bibendum arcu. Blandit massa enim nec dui nunc mattis enim ut. Velit laoreet id donec ultrices tincidunt arcu. Neque egestas congue quisque egestas diam in arcu cursus euismod. Est placerat in egestas erat imperdiet. Potenti nullam ac tortor vitae purus faucibus. Elementum facilisis leo vel fringilla est ullamcorper eget. Quis commodo odio aenean sed.'
            ));
        DB::table('posts')->insert(
            array(
                'user_id' => '4',
                'title' => 'Lookig on the other side',
                'content' => 'Turpis tincidunt id aliquet risus feugiat in. Accumsan tortor posuere ac ut consequat semper viverra nam libero. Ut morbi tincidunt augue interdum. Tellus elementum sagittis vitae et leo duis. Fames ac turpis egestas maecenas pharetra. Non consectetur a erat nam at. Quis varius quam quisque id diam vel quam elementum. Sit amet nisl purus in mollis nunc sed id. Eu tincidunt tortor aliquam nulla facilisi cras fermentum. Id porta nibh venenatis cras sed felis eget velit. Felis donec et odio pellentesque diam volutpat commodo sed egestas. Lectus sit amet est placerat in egestas erat imperdiet.'
            ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
