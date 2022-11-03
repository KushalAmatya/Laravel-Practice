<?php
namespace App\Models;
    class Article{
        public static function getAllArticles(){
            return [
        [
            'id'=>'1',
            'title'=>'News One',
            'desc'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque, saepe impedit sapiente laudantium enim hic sint veniam blanditiis provident explicabo? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, accusamus distinctio. Sapiente ea aperiam magnam rerum reiciendis laudantium, consequuntur amet quia sequi quasi voluptatem ipsum exercitationem. Asperiores, nostrum eum. Delectus.'
        ],
        [
            'id'=>'2',
            'title'=>'News Two',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam natus consectetur assumenda voluptatem architecto quis expedita ullam a qui et commodi, doloremque nobis reprehenderit nemo recusandae rem dolor? Nulla excepturi, repellendus molestias autem voluptate libero, praesentium dolore repellat neque error nobis magnam at sunt eveniet laudantium eaque. In, culpa accusantium.'
        ],
        [
            'id'=>'3',
            'title'=>'News Three',
            'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam natus consectetur assumenda voluptatem architecto quis expedita ullam a qui et commodi, doloremque nobis reprehenderit nemo recusandae rem dolor? Nulla excepturi, repellendus molestias autem voluptate libero, praesentium dolore repellat neque error nobis magnam at sunt eveniet laudantium eaque. In, culpa accusantium.'
        ]
    ];
}
    public static function getsingleartticle($id){
        $article = self::getAllArticles();
        foreach($article as $value){
            if($value['id']===$id){
                return $value;
            }
        }
      
}
}

?>
