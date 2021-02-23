<?php
return [	
		//应用ID,您的APPID。
		'app_id' => "2016102600766363",























		//商户私钥
		'merchant_private_key' => "MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCGK96sELuCc7A4GYM2Jh6EVRmaFerdTPH36xP9gc2t7FvMHqN0odJNz0ysxn8+NCFKoG2vA7luhbaC85iVSRcTKgNTUpYlz5jfu7YVUHjFi6xvNupghATfPHL9u8POT84d8PdWOHTsoCDyDx8iLrdSr9ElNRcqzUWEnpJohyVKExBhj87pTipK9yGN2uq/wB5mtd/dSIBBotFILTx+z7T3fNV7KbUvIEqFd+bZU+U+8GKjJN5oWxR5o9x+0X4KQlb1iiCpEh2ozhE1UAw5OZUuk7dkgTQh77NjYUN1kLcb6paj9bwtN/pww7AQOk+5aiTWwI2Dm7nyPZM1KV1m/sRLAgMBAAECggEAVRN0On7Rp0JcNvZWcPty1k5v0XicWH7131I8dr7cALCi9Kdo1gfWJmiQIe4ruPGtOnjHk/Y0mpRGynpUAjU6YHh/a1IuywL72MJaDuHb8sdCK7MSouiTfkoCUEnDOwr3k5y7+PwLiA9xVIuqHi6pJ9E8OO+VJRrMPe+evpETYAgSh+Ayzm+LtF/Rn9M/BPHXQKiDzy9+y5AqZwJqDpgiY3w7LeI5Xtskarnuxwqmq9PsGudmSb7wsFfypgil+v8wuMbuBP4v0OFWkNB+Flc/kuL8hWymvUlaofu772m/h5eitwmzH9qFUURYbEoFF52dNkVOdT09A8rwrnjeMbm3AQKBgQDLdFqFR3b9Wo3kW9m3DDLNfInaaVuHNJH5alS8bmxBycvjqCaWXkhy67Eyytl3ruTKqAeh3eQQdQj8Hn/yKztIl5MGzSE5rnm+EIZnAemWET2GRJWstIR+cNy2DvTQe4uTE6G++8jJeD1YHhNJ+ZelAwV2yLY/hnNlxVKwvrnl4QKBgQCo0saU65Pww+MN1i9vug1TwfuyUH7c16ZIEG33/NvkKW/NBYS9LgJguAV7AW8hs3a14NMoLhOY21OenuMzroBX0srghNtZU3/rPfofMst82MS2YhM5skQzLV8igu+wNbplFAJpmxyDE9E37slA1FT4fzhDSm9IsDHXVLky/IsXqwKBgBXxKoINPwv75CmorkZLjn8S21su2awvQz7+9LyNvCcsOE0JKYA2EuIyAR5VOjbqKcqhbJFMePg9Zwap02qutuoRTs4A+YBbDM4uwhAB6MtCeLwuUWYa4d8xFNydqFGDwX3PNDaAuRrhWNxUAgiMXopxVPmGlAEt4uwq58wgBbSBAoGBAJ8QGLJvU7BhoCiFSaSHM89a0f8sAJurQ6xaboJc6AGNWR1eubZVB0CBoghHTaH/KTYsYkdVQnmfDKZDJean35zfqu7nvpPnLHtEpcmHXlp/EriUp3CRGdjuQtiNbbAkrz5VIADIeJC3t0Rv44cFiBmqJCSimT9vY0ZzORtk/tiJAoGAXIfDruKzrHLOd3YWgO7C+kEOb0UpStClcteWaRSeVr2AgoXKON2lNV7k/EU5mp8vHHTua1piIYN9l0nk06Z3PnOcJyj0i5EB4PmOj2MbefMRlpBqvvkI0kih9QUJ/SYWr+pLog9iCjZSi828tOjS8gLmLO+08pDauMs74Ihbr6A=",
		
		//异步通知地址
		'notify_url' => "http://localhost/ht/public/login/notify_url",
		
		//同步跳转
		'return_url' => "http://localhost/ht/public/login/return_url",
// 'notify_url' => "http://localhost/ht/public/notify_url.php",
		
// 		//同步跳转
// 		'return_url' => "http://localhost/ht/public/return_url.php",
		//编码格式
		'charset' => "UTF-8",

		//签名方式
		'sign_type'=>"RSA2",

		//支付宝网关
		'gatewayUrl' => "https://openapi.alipaydev.com/gateway.do",

		//支付宝公钥,查看地址：https://openhome.alipay.com/platform/keyManage.htm 对应APPID下的支付宝公钥。
		'alipay_public_key' => "MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApiGQFnWuFfEAS+Qly+gs8Xn6L5PWSTMc7E/ETnDMPvfJl0q77aZ6hOOh9fMQ1zlyCzvyR/eDJ8yr7tAEOCiEZpF+3eoxsNmUh57XPjZ9qJC9J47LvTOr028bX/XNnVn3dYR4Jl50zW0LHyS88RXqE9kWgbV7JQuSuAb7z0JcyH6zjU3NU7FserR64Maf+MYQy44PQK/JlBPmjl0exkrqIqqBDBedppXiEen5modcft0ZyuHiYkSP7kpokRdUPN9bcwNBNeD8wWWBG7s96lcDsBmSk8dT1r/fJcxi00gnjCekJYvN8XUyVxsadw4w9GO2Dofr8iGOqRhpz2U6KbPFCwIDAQAB",
];