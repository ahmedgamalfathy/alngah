<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $article1=Article::create([
        'img'=>'articles/air.jpg',
        'title'=>'التوظيف عن بعد',
        'author'=>'احمد جمال',
        'body'=>'في السنوات الأخيرة انتشر على الصعيد العالمي نظام العمل عن بُعد، حيث تلجأ العديد من الشركات والمؤسسات – وكذلك الأفراد – إلى الاستعانة بأفراد يعملون عن بُعد من المنزل أو أي مكان في العالم عبر الإنترنت.
        تلجأ الشركات إلى العاملين عن بُعد في مختلف التخصصات، منها على سبيل المثال لا الحصر العاملين في مجال البرمجة، وتحرير النصوص، والتسويق الشبكي، والتسويق الإلكتروني،  والهندسة، والتصميم والإعلانات، والترجمة، والديكور الداخلي، وإدخال البيانات، وبعض أعمال السكرتارية، وحجز تذاكر الطيران، وكتابة المقالات، وبعض أعمال العلاقات العامة عبر الإنترنت، وتصميم المواقع الإلكترونية وإدارة المواقع الإلكترونية، والدراسات والتحاليل السوقية وغيرها من التخصصات.
        ولابُد أن السؤال الذي يبادرنا هو: لماذا كل هذه الأهمية لنظام العمل عن بُعد، وكيف يمكنني الاستفادة من هذا النظام في مؤسستي؟
        تعالوا لنتعرف معاً على الجواب من خلال هذا الكتاب',
       ]);
       //'name','email','body','date','publish'
                $article1->comments()->create([
                    'name'=>'محمود اسماعيل',
                    'email'=>'ahmed@email.com',
                    'body'=>'ما هي اساليب التطوير عند البعد ',
                    'is_Publish'=> true
                ]);
                $article1->comments()->create([
                    'name'=>'جمال اسماعيل',
                    'email'=>'gamal@email.com',
                    'body'=>'كيف انظم الوقت ',
                    'is_Publish'=> true
                ]);
                $article1->comments()->create([
                    'name'=>'فتحي اسماعيل',
                    'email'=>'fathy@email.com',
                    'body'=>'ما هي الاساليب التي تساعدني في تنظيم الوقت ',
                    'is_Publish'=> true
                ]);
/////////////////////////////////////////
$article2=Article::create([
    'img'=>'articles/Ars.jpg',
    'title'=>'تطبيقات الويب',
    'author'=>'السيد الجمال',
    'body'=>'في السنوات الأخيرة انتشر على الصعيد العالمي نظام العمل عن بُعد، حيث تلجأ العديد من الشركات والمؤسسات – وكذلك الأفراد – إلى الاستعانة بأفراد يعملون عن بُعد من المنزل أو أي مكان في العالم عبر الإنترنت.
    تلجأ الشركات إلى العاملين عن بُعد في مختلف التخصصات، منها على سبيل المثال لا الحصر العاملين في مجال البرمجة، وتحرير النصوص، والتسويق الشبكي، والتسويق الإلكتروني،  والهندسة، والتصميم والإعلانات، والترجمة، والديكور الداخلي، وإدخال البيانات، وبعض أعمال السكرتارية، وحجز تذاكر الطيران، وكتابة المقالات، وبعض أعمال العلاقات العامة عبر الإنترنت، وتصميم المواقع الإلكترونية وإدارة المواقع الإلكترونية، والدراسات والتحاليل السوقية وغيرها من التخصصات.
    ولابُد أن السؤال الذي يبادرنا هو: لماذا كل هذه الأهمية لنظام العمل عن بُعد، وكيف يمكنني الاستفادة من هذا النظام في مؤسستي؟
    تعالوا لنتعرف معاً على الجواب من خلال هذا الكتاب',
   ]);
   //'name','email','body','date','publish'
            $article2->comments()->create([
                'name'=>'محمود السيد',
                'email'=>'test@email.com',
                'body'=>'ما هي اساليب التطوير عند البعد ',
                'is_Publish'=> true
            ]);
            $article2->comments()->create([
                'name'=>'محمود خلف',
                'email'=>'test@email.com',
                'body'=>'ما هي اساليب التطوير عند البعد ',
                'is_Publish'=> true
            ]);

        /////////////////////////////////////////
        $article3=Article::create([
            'img'=>'articles/Ars.jpg',
            'title'=>'الحاسوب',
            'author'=>'احمد السيد',
            'body'=>'في السنوات الأخيرة انتشر على الصعيد العالمي نظام العمل عن بُعد، حيث تلجأ العديد من الشركات والمؤسسات – وكذلك الأفراد – إلى الاستعانة بأفراد يعملون عن بُعد من المنزل أو أي مكان في العالم عبر الإنترنت.
            تلجأ الشركات إلى العاملين عن بُعد في مختلف التخصصات، منها على سبيل المثال لا الحصر العاملين في مجال البرمجة، وتحرير النصوص، والتسويق الشبكي، والتسويق الإلكتروني،  والهندسة، والتصميم والإعلانات، والترجمة، والديكور الداخلي، وإدخال البيانات، وبعض أعمال السكرتارية، وحجز تذاكر الطيران، وكتابة المقالات، وبعض أعمال العلاقات العامة عبر الإنترنت، وتصميم المواقع الإلكترونية وإدارة المواقع الإلكترونية، والدراسات والتحاليل السوقية وغيرها من التخصصات.
            ولابُد أن السؤال الذي يبادرنا هو: لماذا كل هذه الأهمية لنظام العمل عن بُعد، وكيف يمكنني الاستفادة من هذا النظام في مؤسستي؟
            تعالوا لنتعرف معاً على الجواب من خلال هذا الكتاب',
        ]);
   //'name','email','b
         $article3->comments()->create([
                'name'=>'احمد السيد',
                'email'=>'test@email.com',
                'body'=>'ماهي وظيفة عمل الرام ',
                'is_Publish'=> true
            ]);
            $article3->comments()->create([
                'name'=>'محمد السيد',
                'email'=>'test@email.com',
                'body'=>'ماهي وظيفة عمل الهارد ',
                'is_Publish'=> true
            ]);
            $article3->comments()->create([
                'name'=>'محمد السيد',
                'email'=>'test@email.com',
                'body'=>'ماهي وظيفة عمل الهارد ',
                'is_Publish'=> false
            ]);


    }
}