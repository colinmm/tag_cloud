<?php

        class Tag {
                private $id;
                private $tag;
                private $article_ref;
                private $cloud_class;

                public function __construct($id, $tag, $article_ref, $cloud_class)
                {
                        $this->id = $id;
                        $this->tag = $tag;
                        $this->article_ref = $article_ref;
                        $this->cloud_class = $cloud_class;
                }

                //Gets the value of id
                public function getID()
                {
                        return $this->id;
                }

                //Sets the value of id
                public function setID($value)
                {
                        $this->id = $value;
                }

                //Gets the value of tag
                public function getTag()
                {
                        return $this->tag;
                }

                //Sets the value of tag
                public function setTag($value)
                {
                        $this->tag = $value;
                }

                //Gets value of article_ref
                public function getArticle_Ref()
                {
                        return $this->article_ref;
                }

                //Sets value of article_ref
                public function setArticle_Ref($value)
                {
                        $this->article_ref = $value;
                }

                //Gets value of cloud_class
                public function getCloud_Class()
                {
                        return $this->cloud_class;
                }

                //Sets value of cloud_class
                public function setCloud_Class($value)
                {
                        $this->cloud_class = $value;
                }
        }


?>