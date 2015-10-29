<?php

/**
 * Description of Response
 *
 * @author jeremy
 */
class Response
{
  protected static $metaDescription = '',
                   $metaTitle = '',
//                   $bodyCssClasses = [],
                   $metaImg = '';

  public static function setMetaDescription($description)
  {
    static::$metaDescription = $description;
  }

  public static function setMetaImage($url)
  {
    static::$metaImg = $url;
  }

  public static function getMetaDescription()
  {
    return static::$metaDescription ?: 'A Content Revolution';
  }

  public static function getMetaImage()
  {
    return static::$metaImg ?: 'https://lbry.io/img/lbry-dark-1600x528.png';
  }

  public static function setMetaTitle($title)
  {
    static::$metaTitle = $title;
  }

  public static function getMetaTitle()
  {
    return static::$metaTitle;
  }

  public static function guessMetaTitle($content)
  {
    $title = '';
    preg_match_all('/<h(1|2)>([^<]+)</', $content, $titleMatches);
    foreach($titleMatches[1] as $matchIndex => $headerValue)
    {
      if ($headerValue == '1' || !$title)
      {
        $title = $titleMatches[2][$matchIndex];
        if ($headerValue == '1')
        {
          return $title;
        }
      }
    }
    return $title;
  }

//  public static function addBodyCssClass($classOrClasses)
//  {
//    static::$bodyCssClasses = array_unique(array_merge(static::$bodyCssClasses, (array)$classOrClasses));
//  }
//
//  public static function getBodyCssClasses()
//  {
//    return static::$bodyCssClasses;
//  }
}