package com.example.app

import java.net.URLEncoder

import dispatch._, Defaults._

/**
 * Created by evana on 1/26/16.
 */
object PirateTranslator extends Translator{
  override def translate(input: String): String = {

    val pirateRequest = dispatch.url(s"http://postlikeapirate.com/AJAXtranslate.php?typing=${URLEncoder.encode(input, "UTF-8")}")

    val response = dispatch.Http(pirateRequest OK as.String)

    response()
  }
}
