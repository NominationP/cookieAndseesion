# COOKIE AND SESSION

## Conception

- setcookie
```
    /**
     * client access url ==>  using setcookie() ==>
     *
     * respose :    Server: nginx
                    Date: Tue, 31 Jul 2018 07:47:53 GMT
                    Content-Type: text/html; charset=UTF-8
                    Transfer-Encoding: chunked
                    Connection: close
                    X-Powered-By: PHP/5.6.33
                    Set-Cookie: user_name=Guru99; expires=Tue, 31-Jul-2018 07:48:53 GMT; Max-Age=60; path=/
     *                                      ^
     *                                      |
     *  So, the brower receive this respose | and remember this cookie 
     *
     *  When client access this url[**totally same**] will sent cookie to server
     *                                      |
     *                                      |
     *                                      >
     *
     * request :    GET /intertest/login1/cookies_read HTTP/1.1
                    Cookie: my-secret-cookie=eWlibzogLLlirFkHW5ZLBxUtI0tw; user_name=Guru99
                    Host: api.fango360.cn
                    Connection: close
                    User-Agent: Paw/3.1.5 (Macintosh; OS X/10.13.6) GCDHTTPRequest
     */
```

## Login system

## Laravel explore

