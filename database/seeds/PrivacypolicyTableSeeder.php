<?php

use Illuminate\Database\Seeder;
use App\Privacypolicy;

class PrivacypolicyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privacypolicy = new Privacypolicy();
        $privacypolicy->content_header = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim.';
        $privacypolicy->text = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vitae orci pellentesque, egestas dui nec, ultricies velit. Donec rutrum quis risus eget eleifend. In sed risus lacus. Integer at posuere nunc, quis lobortis enim. Duis in arcu id magna rutrum mattis. Fusce vulputate nisl eget nibh laoreet feugiat. Fusce posuere velit vel magna eleifend, ac sollicitudin leo laoreet. Fusce vel ante vitae dolor sodales dapibus ut vel dolor.

Donec ac sagittis nisl, quis posuere justo. Donec cursus dolor efficitur massa vulputate laoreet. Suspendisse quis justo et metus pretium scelerisque. Etiam varius, magna quis scelerisque molestie, ipsum risus tempor mi, quis lacinia odio lectus quis est. Pellentesque neque neque, pellentesque sit amet lectus ac, sollicitudin lobortis purus. Vestibulum convallis est orci, et volutpat nunc varius vel. Maecenas vel sagittis massa.

Proin egestas tellus vitae ante aliquam faucibus eget nec neque. Vivamus vitae nisi eu tellus tristique gravida sit amet at ligula. Vestibulum eu commodo nunc. Nam eget lectus a turpis iaculis accumsan. Cras at est quis mi semper fermentum id ac lectus. Nunc ut sapien semper diam gravida efficitur. In volutpat tortor ipsum, porta faucibus dolor lacinia eu. Donec tincidunt, nulla et rhoncus dictum, quam mauris fermentum dolor, nec malesuada risus tellus vel odio.

Suspendisse luctus tincidunt risus, vitae consectetur neque venenatis eu. Fusce sed egestas turpis. Vivamus luctus nulla eget pellentesque maximus. Mauris tincidunt tellus ut sapien consectetur, vehicula cursus ex fermentum. Sed eu venenatis lectus, non mollis ex. Aliquam gravida vel ante sit amet maximus. Donec ultrices velit quis enim venenatis suscipit. Sed ullamcorper, ante eget congue iaculis, libero ligula dignissim sem, ac commodo mauris erat a nunc. In sodales nibh vel purus facilisis egestas. Nulla enim massa, porta pellentesque nisl non, scelerisque eleifend ante. Mauris tortor lectus, blandit malesuada tempor commodo, sagittis ac justo. Pellentesque convallis sagittis pretium. Ut suscipit egestas mauris vel placerat.

Ut pellentesque molestie volutpat. Etiam pretium semper ligula non mollis. Quisque faucibus mi dolor, ut euismod urna elementum id. Curabitur vel eros non dui pharetra viverra at nec tellus. Donec convallis commodo tortor, vel pharetra tellus facilisis ac. Nulla convallis ultrices nisi at scelerisque. Cras pellentesque enim et erat placerat vehicula. Morbi libero eros, pretium id arcu sit amet, dictum laoreet sapien. Proin tempus libero sit amet pellentesque hendrerit. In fermentum ligula arcu, ac tempor elit sodales ac. Nullam malesuada purus vitae sapien elementum, vulputate ultrices ipsum laoreet. Integer lacinia augue leo, id consequat nibh cursus ut. Aenean vel cursus ipsum. Nam quis mattis eros.</p>';
        $privacypolicy->seo_id = 5;
        $privacypolicy->save();
    }
}
