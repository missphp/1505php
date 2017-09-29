<?php
/**
 * Created by PhpStorm.
 * User: lau
 * Date: 2017/9/29
 * Time: 9:02
 */
   namespace  php1505;
   class P
   {
      /**
       * 格式化输出，中断
       * @param $data  array() 要传入的数组
       */
       public function  dd($data){
            echo '<pre>';
            var_dump($data);
            exit;
       }

      /**
       * 格式化输出，不中断
       * @param $data  array() 要传入的数组
       */
      public  function  d($data){
         echo '<pre>';
         print_r($data);
         echo '</pre>';
      }

   }