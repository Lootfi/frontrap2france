<?php 



 function FormattedContent($article){

        $article->contenu = html_entity_decode($article->contenu, ENT_QUOTES, 'UTF-8');

        $imageIds = [];
        preg_match_all('#(<p>)?\s*(<div[^>]*data-img-buddy[^>]*>[^>]*<\/div>)\s*(<\/p>)?#mx', $article->contenu, $ImageAttributes);
        $attributes = [];
        foreach($ImageAttributes[0] as $key => $Image) {


                preg_match_all('#data-img-buddy-(.*)\s*=\s*"(.*)"#isxmU', $Image, $Resultattributes);

                    array_push($attributes,$Resultattributes);
                }

            $images = [];

            foreach($attributes as $attribute){

                preg_match('/data-img-buddy-id="([^"]+)"/',$attribute[0][0],$m);

                $articleImage = \App\Models\ImageArticle::findOrFail($m[1]);
                $imgUrl = "https://img.rap2france.com/public/medias/news/image/".$m[1]."/raw/mdpi/".$articleImage->image;
                $imageHtml =  "<img src=\"".$imgUrl."\" width=\"100%\" alt=\"".$article->titre."\" style=\"margin-bottom:15px;\"/>";

                array_push($images, $imageHtml);
            
            }

            foreach($images as $key => $image){
                $article->contenu = str_replace($ImageAttributes[0][$key], $image, $article->contenu);

            }

            preg_match_all('#<div[^>]*data-html-snippet[^>]*>[^>]*</div>#mxiU', $article->contenu, $Embeds);
            $embedsArray = [];
            foreach($Embeds[0] as $key => $embed){
                preg_match_all('#data-html-snippet-(.*)\s*=\s*"(.*)"#isxmU', $embed, $resultSnippet);
            array_push($embedsArray, $resultSnippet);
            } 

            $embedIframes = [];
            foreach($embedsArray as $embedEl){

                $embed =  base64_decode($embedEl[2][0]);
                $embed = html_entity_decode($embed, ENT_QUOTES, 'UTF-8');
                $embed = sprintf('<div class="my-4 mx-auto "  data-html-snippet="true">%s</div>', $embed);
                array_push($embedIframes,$embed);

            }
            foreach($embedIframes as $key => $iframe){

            $article->contenu = str_replace($Embeds[0][$key], $iframe, $article->contenu);


            }

            return $article->contenu;




}






