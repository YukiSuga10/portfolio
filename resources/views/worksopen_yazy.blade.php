<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YAGI HAYATO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? family= Rubik:ital,wght@0,400;0,500;1,600 & display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize (1).css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/worksopen_yazy.css') }}">
</head>
<body>
    <header>
        <h1 class="header-logo">
          <a href="/">
            <img src="../image/header/yagihayato.png" alt="">
          </a>
        </h1>
        <input type="checkbox" id="check">
        <label for="check"><span></span></label>
      <nav>
        <ul class="header-ul">
          <a href="/"><li>TOP</li></a>
          <a href="/about"><li>ABOUT</li></a>
          <a href="/works"><li>WORKS</li></a>
          <a href="/contact"><li>CONTACT</li></a>
          <svg class="twitter-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" viewBox="0 0 40 40">
            <image id="twitter" xlink:href="data:image/png;base64,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MiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRhQsMp0lRWVARlQsBwDMiADZRj4A6cu+5MSTao0AAAAAElFTkSuQmCC"/>
          </svg>
          <svg class="instagram-img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 ">
            <image id="instagram" width="40" height="40" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAEACAYAAABccqhmAAAABHNCSVQICAgIfAhkiAAAIABJREFUeF7t3QnYdetYB/BzkAbJnCJ1hIrMRCG+QqQMyRCJQwiRypDZkQwZKg1mxyEpQyoKhXzKUWSooxwn04eiQqg0mOr+Ze+u19f7fe/ez3rW2s+z1n1f1//a37DXs9f6P2v91zPcw4lnnXrlE9KSgWRgmQycmAKwzI7Pq04GMJACkPdBMrBgBlIAFtz5eenJQApA3gPJwIIZSAFYcOfnpScDKQB5DyQDC2YgBWDBnZ+XngykAOQ9kAwsmIEUgAV3fl56MpACkPdAMrBgBlIAFtz5eenJQApA3gPJwIIZSAFYcOfnpScDKQB5DyQDC2YgBWDBnZ+XngykAOQ9kAwsmIEUgAV3fl56MpACkPdAMrBgBlIAFtz5eenJQApA3gPJwIIZSAFYcOfnpScDKQB5DyQDC2YgBWDBnZ+XngykAOQ9kAwsmIEUgAV3fl56MpACkPdAMrBgBlIAFtz5eenJQApA3gPJwIIZSAFYcOfnpScDKQB5DyQDC2YgBWDBnZ+XngykAOQ9kAwsmIEUgAV3fl56MpACsN09cGJ8/SsCFwlcOHDBFS4Un3CuwDlWOPueP2/3K/ntvQx8Nv4Cn1t9+vOnAh9Z4aPxCf8Y+FDg3wP/nRRuxkAKwPF58sB/ZeACgZMCFw98c+ASga8PfE3gqwJfusLZNqM9vzWQgc/H8f+1wr/E5z8EPhB4T+CswPsCRwIfC/xbCsKx2U4B2J+bL49/9oa/YuCqgcsFvm71wH91fHrLp7XHgNHBP60E4e/i8+2BNwf+MmCE8B/tnfJuzygF4Iv593B/a+DbA1cJXDng3wzt0/pjwFSBILw18JbAnwf+ZvVv/V3NCGecAnDCCYbt5u/XCFx/9fBfKj7N9XNIP8JNt4MmTRmsDbxrJQKvis83BKwj+L/F2tIFwDz+OwLfG/jOwDcELN6lzZcBi4nvD/xp4BWBPwtYP1ikLVUADOu/K3DTgDf/xQL5tl/WI+DN/8GAkcDvBV4bMF1YlC1NAAzrrxa4eeD7A974+eAv6pb/fxdLCIwIfj/wksCbAqYLi7AlCcBlokdvFrh14FsC51xED+dFbsrAp+OL7wy8IPC7gXdsemDP31uCANiyOxT46cA1A/bt05KBYzHAr+D0wC8EDgdsLc7W5i4AHHhuErhnwJZeWjKwKQO2Dn818NIAh6JZ2pwF4Bujx+4R+KHARWfZe3lRYzPw9/EDvxV4cuC9Y//YLtqfqwBw5nlowCr/l+2C2PzN2TDwn3EldgkeGeBENCubowBw3X144PsCfPnTkoGhDAgu+oPAIwJci2djcxMAzjyPDdjbT0sGajPAZ+ABAU5Es7A5CcD1okd+MXDZWfRMXkSrDPx1nNhPBV7d6gluc15zEQAr/M8OXH6bi8/vJgOFDJwRx90xYKega5uDAIjPt11jBJCWDEzFgBGA7WX5B7q13gVAYo5HB24Z2OWCH3dSq8W8ydaJKnyKP/eZGWrKHhF9KtmK/AzrpCs+eXHa3dmlG7c+fVHgQQGJSLq0ngVACK85/w/viPlPxO/+c0A6qiMBgSVSUoH/+8wepACUdRIB+JI9OG/8WTo2EMB1UkBatvMH/N8u7DfiR60JCC3uznoVACG7DwycEpgyfPdf4/ekmzLs+4sA5xDqTwQEkHjjZ9aZcR8DowEQ2OXhNwrk9PVtAdNBadvOPe4pfFHrwovdh48J+HNX1qsA2ON/WmAqD7+Px2/JJiNk9K8CfxuQh86Qf9EJJRq4200DTAnkZ/ymwBUCQr1ldTrfROfHY/DHAnwFurIeBcA23zMDV5+A6U/Gb7wxIFTUoo+3vYc+rV0GiIFRgUVhId/uk/NMcLrukzsHbBN2Y70JgKHfUwJ3GJlhb3XDfFuLHv588EcmfITm10JABGzZmR6MvWj4nPiNuwe6mQb2JgB3CnJ/OTBmkk7hoFJFWdz5o4BV/LR+GbBr8D0Bi8VSv40ZDi4J6U8ETu2Frp4EQIDPiwOSeYxlkkA8P/DrgcXmiRuL3B23K//jjwRuG5AcZiyTVOQWgS4Ch3oRAG98CRruOlKvWb0V9/3UAH9vxSTS5seAIi/iRO4WkCdirB2kp0fbEtAYETRtvQiA4ZuHUwfWNhlfpIASPky90+bPgFGk8F4p4sYo8uIFQmRMI5u2HgSAk8fvBK49ApOcdU4LPC7w7hHazybbZeCScWr3D5wc4GxU2/4kGvyBAGexZq0HAZDR57kjdJJh/zMCpwSUjUpbHgPKv+n/uwRqTwe8XG4fkFGoWWtdAGz7vTBgK6e2GVVYsVVDLm25DKj5aGfJ27q22UK+VaDZbcHWBeAGQZ6V/9pzf159VL8rp43ad2e2938McC4zGuQ9WNOsBdgR+MOajdZsq2UBMC+z8Gfvv6Z9OBqzQGPVP61vBgQLiQpcL+SZ1vHbKPHJtyvgfvvaypTwCXC/mRI0Zy0LwKWDLY44hmi1zFBMvkBbiiU3Sa3zyHaGMcCZ56SAIq6qO/k7Lz/BWvzy7eYcCWyzAGcNwNadvH+mnrXMFJMj0pm1GqzZTssCILiCIte050Vjkjjw8U/rjwGjQtmfvK2vE+DcIyrQvxsNeMuKyjTK48/Bo/M1gU2Le4gZkFzmdpWpMQIQvNactSoAOtTcX0fXMvXfbhNQDTatPwasA/HiEwdypcBBb2lBW6I2BY7x7tw0Xl+16N8MGFnUMtNNawHNTQNaFQCLMjKv1kzy8LBoj/NHWn8MeMvbsZF4Q2Xnbcxo77TAo7YQAU5hP7vNjxzwXQliZKxubtG5VQH4ySBLtp9aZk4oEORIrQaznckYMLdX4ckDWRrfL13bEwLm95tMB06K75k+1Iw7IV6/NBlrG/5QqwLwsjj/mnv/p6w6f0Na8msNMSDTj9x7Q4fk6vv9aECVn03MYrH7ppbxCbhxrcZqtdOiAEjv9LpArdX/I9GWVdh31SIt25mMASvzFoIl2qhhppVeLEK+DzI7DHahTjroixv+v90AC5dN1RhsUQC4/grHrRWkYfXVKmxafwwIAedTLx6khlkYlEF6Ux8Q4mM3qoaZeghHbso1uEUBMPe3BlDDzP2s/Iv2S+uPAcItA1RNc3/Z79/ERAvaEahVYNYagLWAZqw1AbAPS51rRf79ZbTFnfifmmE8T2QbBqRkO3mbAzb4rmE9v3/+AgeZHQduvFc86Isb/r/RjK3tZvxQWhMAIZocNzh41DB13X+8RkPZxk4YsBZU62WwvgBZne0IcRbaxH4tvmQXoobJMnXdQDOh560JwFWCHI46NeKzJfbk0WUIl9YnA0pxuydqmi1ho8JNU76ZQvIgrZFQlCMQR6O31LygIW21JgA3iouplVvdsN8W0qYdPYTHVo/lHmslna+8PXQFM9altsxr13NbayWwLmXGp14tBKvlYiZ2VdlIKnZvzJqmoKf7bNMcEEajisBs64B0rHNW0+LlNS9oSFutCYChliFXDTN8VCBiVzdvjWvYpg0Puoeb19y6bJabdi94VsqvCL63zq4sd505sU/guUZA9+JI/F35M98rjbjb5np8t+bwe/3b/ADE6G9a34GIKghjC6+GmZKamjZhrQnAzwcr0jTVMEke7l2jocbbUCORz8S6LBbvNU4zKuV461tYNaXadghrCmXIasHKaEAlJPEUhtDr8mj2tjf1sS+h0fCbH39N41HIyWcbe1J8mStyDZN+7mdqNFSjjdYEoOaqrwzCkjzM0QTGcJiS3vqagasGlEkzxK8ZP7Efd0YH67Bbc/TTA9Kpc3CpnU3ZSIbzzlAvwPV1mNLwxrMav41JHiPTbw07LRpRqKQJa00AOEncuhIzhmzbdnSlnx6lGUNRb/SrBVybxTFve0N8Q/9dmKmAaYJRgYUt0643BYwYaky9XPPPBZTgrmHSy4kmtN6xjdmJcG017AXRCGe3Jqw1AeCwc9NKzIgo7KI4wwbXK0uNt/wNA4cCtkuVvmrJzKltbx0OvDJgdLDpVtvxrsO12slx/UPM+oUHT56AbY1HYq1IPmsQHIyasNYEgNMFv/2h5ma8XEA8eM9m/m4h07BVOKmhcGsP/tH84t5agaG7oC4LaEMdX+zb8+CzzlFiyreb9/MqLBmZqDr89krcc0SyDdmEtSYAtRw/DEENkS1W9WjiIHif8Vjju67mfa3YiKn44PuOf5F8MjDzytwkFHe/87OAefPAQwLKf29jUoQJBTaH38T7b7+28W+KUxqOvLdN09JaOwrb8LDvd1sTAE5ANTKzGnpqp0cfALnq7VOLgNsk883gm2DkBvgWvC0gM4/970333/c7LaNDwTnXChy0L+8loGS3mhKmlkNSc/MFkEm6RsJQ7XAGasJaEwDkqOc+1D60Irk3AfB2k7PQkNeq/pzMm1iSDTn3uOOWmoeREBABUwKCyZ/BKIEPg21JOxJeJqaUFihLhv17z89vau8ipSe95ziiVOMlV+FUIpHiWafKsdiMLVUAzOutNN83wPOtt+H+pjeQKYBYD0NyQ+FNnXGObp/TE/8HC4T7CcCR+HcvgdL2j/69FIBNe3jg95YoABcIziS7VP+gVtTZwG4Y/XDrAfLlc/KRqad1SwGYqIeWJgCGlHIfSFVVK+nFRF01+Gfk7H9WQIy8t3XLlgIwUe8sSQA8/A9evflrJZyYqJuq/QyHHCMBGXtbFoEUgGpdfvyGliIAHn5pyrmEtr6vP3bXm6dzAZext4bj0BjnmwIwBqv7tLkEATDnPyUgVmGqh98WmAW4Nfjy8+lfJ8cULiyGQCyBBcg1Diq+Ueu24FJsn54ItLgmkAJQq6cPaGfuAuAhEwkmL9zY/vsecn76Z63gwfLQr+P8Be6sg3cEF8E6b4DzJFS22cCeO3EY00wHrAeICHWeLVkKwES9MWcB8FDdL2DRTyz+GOaB5oYrBTrPNckvCIAHygPmTXuQN563P3GyLuGcCYC9Yp6V62Kctcu1r7ngqUcEHt+YCKQAjHG37tPmXAXAAyUTrai2MR4eb3thufbWbbFxfvH25xhTwzjaGAWIPrRVyWdBGPIYowIi9uiACs4EqwVLAZioF+YqAHz6BaJwWqlpHhBveVVnRJl589dyfjnWeVq3MBIQtanIhtFB7ekMd+G7B8QQtGApABP1whwFgD+/xCQ1k1vK1uNhF233koC3/hBf95LutUBoNCBIR7QiUdg269DxftcURiIOcQS7thSAiXpgbgIgeMSbv1aOA90gtNaD/9uBw4FdL5hZJzgU+MGVEAhhrmVGNUYCu94eTAGo1aMHtDM3AeDoI6NNLeM9J1GmcmeCa1oywUsi9SS9rOnVKASYo9AuLQVgIvbnJADeimoc1ipyKtuOSLrTAkMTbIzVnd7+JwdENArUqWESj6qpd7hGY4VtpAAUErftYXMRAKvjvNsMi4eaUFahqEYSsutsm89u6O9ve7ztQ1mMvLnFvcvrN9RMd3hN2u3YhaUATMT6XATA4pW05EN9/D38kll4+K3292R2B4iA/HdDRYDoScu9qyzPKQAT3XlzEAA3i4fW6v9QUyWJ/0CvuQ3l0rOfrxrOULMbQEx2keQlBWBo7214/BwEwJtKAsuhW2KSUN4+YIuvZ7NVKC2XJK1DzNYnF2ojq6ktBWAixnsXANV4vP2HpjXjxWdFXVtzMG9uOxcH5fE76Fql09KWKkVTWgrARGz3LgASedr3H5LSS4SeFNa/ElCYcw4mhde9AqL9BByVmjgGfgESjE5pKQATsd2zAPCXl/WWn/wQM32weFaawnrIb495rAAoi5mG8UNMvIOsybXiHDY5lxSATViq8J2eBeC74/plvR0S439GHG+I22s9g4NuAfn1TWsuf9AXj/P/Yh1kTf7jAW1se2gKwLaMFX6/ZwGw2j3k7ebGNkyuVYSysAtGP0wiFNObIUJplGR3ZCpLAZiI6V4FQJTfqwJDVrqVjFIOm7vvnI2bsFp/Q0rA2SG5fmBIkZFtOE4B2IatAd/tVQBuFdfM7bf0rcbD7XaBlw7grqdDbxIn+7xAaT4BoyXuwar9TmEpAFOwHL/RqwAY0vJ/LzUPg6Hx1CG9pec79DihxKY6RK/UxEWYMk1hKQBTsNypAAiH5bF3jUKOrPbfMKCa7pJMtWNlxEvToynzzcNwinDoFICJ7sweRwCXDm7cjISgxBxrB6GV9Fcl11ByjCxCVvJLhdOD79gzS358y2NSALYkrPTrPQqAjDii1UqNc8wppQd3fpzr5vRUaqItZUQa21IAxmZ41X6PAvDYOHepvktMlJvV8KUN/9dcmQbY/SiNmpRC/AElxG95TArAloSVfr1HAeD9xzGlxMT5m8fK1b9EO19ctPUTeQNKjOMVr8CxLQVgbIZX7fcmAF8S5/03AQkxS+wxcZBU4Us2KcAfWEiAxKjfGvhM4fGbHpYCsClTA7/XmwCI/hOrX7Kfbfh/y4CU3ks2qcVfFCiZBvCfkHNg7OjAFICJ7tDeBMAq9OGAkcC25qa9buAd2x44s+9fJq7nNQFiuq158x8K2EkZ01IAxmR3T9u9CcAPx7nzACxJefWeOE7egBaLYU7U3f/7M2oQivO/RMGPSpnGI/A3Co7d5pAUgG3YGvDd3gRAQMoTC69X5J9sOW7iJRvxlPWoNELwPnGsQKwxLQVgTHb3tN2bADwyzl3sfokdjoNkz037QrbjQ4VEyDHw0MJjNz0sBWBTpgZ+rzcBUKTjHoXX/Pw4zhQi7QtD+NsWEvHkOE4xkjEtBWBMdve03ZsA/Fac+60LuXlcHFfqQFT4k80exqHn/oVn94I47ocKj930sBSATZka+L3eBEDtOqGtJWbYWrNsWMk5tHKMaZTpVIkJoa5Ze3G/c0gBKOmZgmN6EwCJLUrfPo8f8NYroLbpQ4yG7ld4hkZhEqmMaSkAY7K7p+3eBGDIGgDxKJ33TtQdk/2M9ZDShzjXAAZ004lnnaqCUzPWmwD8bDBXugL9ujj2UDPM7/ZEDsfPX6fwFEwdHlZ47KaH5QhgU6YGfq83AZAEtHQPWl67KwTSD+CEE/4qeCjNp8gXQ5LQMS0FYEx297TdmwAYwkvnVeIJ+N44jifgRyfittWfuWCcGE/Abyw4QeIprZgpxJiWAjAmux0LwLfHuStUURoLcL04VjThkk0036sDpbEACrF4cYxpKQBjstuxAKh1JyS1pNyVFGCyCS8lE/CxbiHbqLL7ShG2rSmjJhRbLcUxLQVgTHY7FgBv/r8OCEktscwHcMIJQ/IBCMW+bCDzAZTcfXFM7gIUErfnMPH8svqUmFRg4uG9yZZoRk74kxqsxGQTwt/YliOAsRletd/bIqDTflSgNKuPlOA3CLx+In5b+5lrxQn9YaA0NbjRw4MnuKgUgAlI9hM9CsCN47yHzONlxeVPsESzfy8rcqlZP3hZ6cFbHJcCsAVZQ77aowCY/3uDX6jwwk+P42QGWmJdAJmArlnI20fiOCMI6wBjWwrA2Ayv2u9RAL5yNQIoje1XDswagpj4JRm+zOGVCSsxfBkB/FvJwVsekwKwJWGlX+9RAFzr0NLgAlruHPhUKXGdHXeuON9nBkoDqVzulCXCUwAmusF6FQDVgXijlexlo9aDf4fAkApDE3VRlZ9R0ec5AUJQYqZLvDCnqArk/FIASnqp4JheBcD8X4UbOf5KTZ08yUXm7hrM9VcSD/UQS00OQRWVrANMYSkAU7Acv9GrAKBHfP99B/DEmUVwkRDjOZv0XYbvJe7Ta16eEH8ozR9Qwm0KQAlrBcf0LAB80u1plxS4WFOl0q3sNtyL52jcdmVRUlG51BRU4TshBmMqSwGYiOmeBcBqNq+2IUNbND81wLFobvUC1QHkuHO3gfeSqRLvP7snU1kKwERM9ywAKDo58PTAkOEt70BDXHEC3nZzMKMi9f9MkUq9/vBgmnTXwGkTk5ICMBHhvQuAxcDfCZQ6t6xpFhsg0cWzJuJ97J/50fgBW6UlUZN7z43T1A8Eplr8W/92CsDYd8iq/d4FwGXcPfArgbMP5Ox9cbyyV276no0YKp928YEX8bk4/l6Bpwxsp+TwFIAS1gqOmYMAXDSu2yjg2wqu/+hDRAsSlF6Thkj24YEtjfbby8dfxF+8/f++Aq/bNpECsC1jhd+fgwC4dE49bvxSN9e99Al2ETDzlkJOd3XYVeKHBToJlhpqFvwIIeehXVgKwESsz0UAari6rin/fPzhzwIWBaXOaj1oiDekVGcW/b4jcLYK986uXaVTACp04iZNzEUAXKu5r5p337DJhW/wnXfHdzjQSELaagIRi3ySdHJouuQG17TJV94fX1JDcZdrISkAm/RUhe/MSQDQwVtN3buSrMH70Wn129TC7sAHKvBdswkPidV+Q/XS0Oijz0fWX/UTeVnu0lIAJmJ/bgLgQeDae8uK/Hn7vzLw4gCnmI9VbLukqQvEQZyfbhG4YWDoVt/ec3hR/IXr8NTbfkfzkAJQcmcUHDM3AUCBpJXPCEghXtPUFRBPL4LwzYGpQ4mtc1w1ILJPPoOSvP7H48O9cJeApKu7thSAiXpgjgKAOq6rTwtcpDKPPONUGCIEth7fGRjbRdbOxrcEbMl58FX0GeL5uB8lH4p//LEA1+oWLAVgol6YqwB4QCyMyYFXGgN/vC7gPqy6Dr+BMwL8BjxEsuXYRRhiVvFlPSJe9vUvH7Cvr6rRELfeY52TkYwciRY8x073vSkvKQCbMjXwe3MVALSYGz8kwJttSMTg8Sj29v9wwI6BenucZwyh/zng/+Cgh4pYecvD+QOmMJya1DG0sv+1q/8b2NX7Hi72gRflzwVa2ulIARijt/dpc84C4HIlwzAKMLcdSwTWtHrYJRcRWmxqQAREGMK/rh4wn+zcAQLlU9QeePgN9YXwOu8aTk3Hu408/NZKvP1bS4qSAnC8nqv4f3MXAFR5g9rasmVmaD2FcR7iSw+fDZgafCLwydWPnyc+z7s6n3PEpzgGKE1xtu01OZ9TA48NGMG0ZikAE/XIEgQAlbYHf2KFmttmE3VT1Z8x1P/lgKH/2DX+Sk88BaCUuS2PW4oAoMVblwhwFjL0XqKZgnDyIQDr0UiLPKQATNQrSxIAlHr73ztwz4BKw0syb/tfDTwp0NKC3359kAIw0Z25NAFAq7f/bQIWBjnWLME4Llnw+83AeiGy5etOAZiod5YoAKi19XaNwH0CEl6ecyK+p/6ZT8cPSpz6xMAbAgdtSU59fsf6vRSAiXpiqQKwpvcy8Yd7BHgO1ooinKjrDvwZUX08+54ceMeB327rCykAE/WHuPcaPvO2krTTWsTcJjQKrjEKWE8Jptoq3OTcSr5ji2895Pf233XwUsk1EAAvJ1u4Q0078iQ0YSeedeqVmziR1Um8Lj6vXeGE7HHLSCNgpkezB8/tlr+9akGXCPQ2LTDcf09AFSBxCtyT+SH0aAKdZGTiKzHU1DO4ztBGah3fmgAIc/X2G2puPkEqU5SOHnquxzve258gmhK4aQjBVM45pdfF6ciDT8wN+d3wU1TwLT3fTY5TAl7QVQ0RNgoSNt2EtSYAvxusqIxTw/iw95pM8+jr54prRKMentj7bw6M7Zq7bR9wPT4rIEeBOonemK259G57TevvG43VCktWGelmpSdS+7jWBEDuN0PeGnYoGvEWmovJKsRvgBCIxhOgY9Hwa3YoBh76fwhY1BN4JBrRg29fXzafuZjR1+FKF2NKNKQseqXT+EIzrQkAf/A7VrrCu0U7YvDnaN7+JwUE61wrwH/gYgFBPDXmqcfjzPqKgKIPBizuvT4g2OhIYOxcBLvqS7kJlGyrYc+ORu5Uo6EabbQmAIJBBMrUMF5mQm/nbqL2xOqbFgjXBUU4LhzwfwTB3FVc/6YZeuUQAGspHniRhP8YUKxEqDEY7ss54P/mbuIUeGvWMDkiH1CjoRpttCYA3tq1Kr9YfDoUmNNQ9Hh9vo7es0ho2+rrAoKOuBivQRAk8ZCUxALjOjmJJBwW6nxKLuKh5qq7hpx8fxewrWqRbx1dWOMebL0NU6/DgRq7U65V0tRao4nB3LUmAHYA7ATUMDetPU437pJtndFnHe5LIEA+gnVOArH4sH641+HCNTIK9c49IX1roFamYzsAdgKasNYEwAPLGajGdos9Zz72MsumJQOlDMjoLGZhaK1Hv29KxQmIoDRhrQmAfe7XBGq5wXI7lVY6LRkoZUBad+7ZNYw79HUD/CSasNYEQGScfdLvqsQO5w3TihazzFS6xGxmRAa4/hqucyqrYa+NRvi5NBMB2ZoAIPlxAUkyapg5rbJScuenJQPbMqDmgfJutbwvJT+5/7YnMeb3WxQAXlIcgmqRLu7cPu5SdgPGvF+W1LbVf34kgrJqmJcRByDers1YiwJgT5tHWa1KM7auTAM4q6QlA5sywMnK8N+Wag0TmMaDk+9EM9aiACDnJQGRcLVMnvmH1mos21kEA4+Mq1THoZaJiLx5rcZqtdOqAPC64n1Vy0QFfm+g1/DgWjxkO5sxYPT5ioAowFrGK5V3alPWqgBcOljiY85zrZZR9IcHci2gFqPzbMfc/xGBmiNGnpViNs5sjbJWBUBxihcGak4DBK/YEbC+kJYMHIsB83Qr/4Krapnh/60CirI0Za0KAJLuHLCCX9OICl/sJQSw1ORtKW0ZcYpF8bDWNDsJz6zZYK22WhYA0W1WYWt5BeLMVowFQRFZvWSkrdXX2c7xGZCZWSSqhb9aW9B+kfefXSjRk81ZywJgGsAN866VWRPhxrUznYMqE9t5c5x+uI7XLtDy9GiTO3pzw3/91bIAOD/pr8yfatfPk7VGp7yx85s2T78OA1dfvWxkW6ppMiNZx5ImrUlrXQCEq/IKrJUncG8nHI6/KMt1RpM9kyc1FQOXjx9SnuzQCD8oroX3n1DrJq11AUCaodnzAzVChI/uBA5HRgLy2qUtjwH5FE0zx3DQEfp720CXFN51AAAGb0lEQVTTU80eBEAVXQ+q6cAYxt/70YEei4iMwcdS2uTi+6CAOJExzLCfsLRc9bj5NYB1x9iWsZhCDGqb3QDbg0Sgt5JVtblYSnuyKXv43VdW/2ubh97itfuqaethBIBAWXCFCddKzHh0p8ge9PKAvdrDgdbLVTd9UzV8chaTDwX4mNwoUCPLz36Xy+VX2G/zWZJ7EQAk8wt4cUDBj7HsXdGwRcfnBJrJ2jLWxS6sXdmm7hCwKHepEa9dAZFbBJrc9z/6unsSAOd+u4C9WpmDxjKJMF8d4A5qVCBLblq/DMiC7G3PDfx6gTGLrcr0w8fkeb3Q1ZsA8NASJVgrScPx+slo4LmBlwZEEza7ldPLzTbxedpCFs13k8DtA2O+9deXxnVd1B+P0y6sNwFAqkQN5urXnIDhdWlrRS5flUIwAePDf2L94F8/mlJUVdWkMd/66zM+Pf5gbaGrxDM9CgDCdS4RqJWt5aDbzqqu2neKjbxt1ckSjdrrzZiCg9gb9/+t4vMRkcDTy+FKAUU81E4cY9dov6uxhezh95LoynoVADHbEocK7BljG+dYnWg9QHCH6QF3Yn+22MORaF1Vx2faeAyoZrSubsSRx+KwgDFuvIb5/uz/pzIvAAFEEn52l2uiVwHQuUI3nxA4OUAQpjYLPrYLlcA+ElCBSL43MGIwOsgRwvBeWb/hveW90eWMBBV7TgoonW57b8yF4WNdhQf+tMB9A12GmPcsADpF6qYnBnZdb92NYOFn/cD787rcln9LK2fAg78uY2YReC0I/rwL4d97JTL83ifQbaq53gVAZ/DqksShVvHG8ls1j1wSA9aDJJfp2nt0DgLgplNT0KKgBaC0ZGBsBiwEW/RrpsZf6QXPRQBc/3UC3IWvVkpGHpcMbMDAm+I73Hxft8F3m//KnAQA2VaCZf6VAlxGobRkoBYDMvpIFS5jsB2gWdjcBECn8P6yLaM0eIrALG7TnV+Eh1+JcNvOvEJnY3MUAJ1jd0Bed7Xd7RunJQOlDPDreFFAXYluV/uPdfFzFQDXa5/YKq0gkJqZhUtvpDyuPwY4egkKe2pAXYnZ2ZwFQGedNyASTICGxI+73jee3Q000wvi1yFhrMAzEaGfmOl1dpMRaAj/Z4uDlWX66QBfgfMNaSyPnT0DH48rtMf/CwHl6T4/5yue+whgb99ZHLxxQEIISUV4l6UlA2sGeG5K5iEhzMsCs1rsO1Y3L0kAcOCh5zQkV7s4cYuFuVOwbBGwwm9xT94HNSg49ywm98PSBGB9qwskUgRSDIFPi4QpBMsSAg++RT7FYvn0++wyoGdIty1VANaciSrjOXjDwKHViGDK8OIhfZfHljEgfNcb/3DglQGefSI4F2lLFwCdbmfgAgG7BHLGXSMgsYSY8hwVzOOx8LaXy0G2njcE5Hy0yv+xQHcx/DW7JAXgi9k0Nbj0SgysFRgdSDqxi1jzmv281LbkbJCsxVve3N5Df2ZgcUP9Y90AKQD7MyMGXZXYywXklPN58YApw4UCOU1oU1IM7z8SMKR/X+DtgTevPlWFztwMR/VbCsDBNzJXYiMDOwYnBS65wsXi0+hAlhrJKcCUwZQiHY4O5rXkG4brYEgv6QrIvuQtz1Pv3SsciU/zfG/6TNF2HKZTALa/DVUp8uBLRUUY7CDISwdGDesMNns/UxC259kRHnZvbdtyez+9zeViBCv5HnSp2QhB89V4yqgY56gUgHF4zVaTgS4YSAHoopvyJJOBcRhIARiH12w1GeiCgRSALropTzIZGIeBFIBxeM1Wk4EuGEgB6KKb8iSTgXEYSAEYh9dsNRnogoEUgC66KU8yGRiHgRSAcXjNVpOBLhhIAeiim/Ikk4FxGEgBGIfXbDUZ6IKBFIAuuilPMhkYh4EUgHF4zVaTgS4YSAHoopvyJJOBcRhIARiH12w1GeiCgRSALropTzIZGIeBFIBxeM1Wk4EuGEgB6KKb8iSTgXEYSAEYh9dsNRnogoEUgC66KU8yGRiHgRSAcXjNVpOBLhhIAeiim/Ikk4FxGEgBGIfXbDUZ6IKBFIAuuilPMhkYh4EUgHF4zVaTgS4YSAHoopvyJJOBcRhIARiH12w1GeiCgRSALropTzIZGIeBFIBxeM1Wk4EuGEgB6KKb8iSTgXEYSAEYh9dsNRnogoEUgC66KU8yGRiHgRSAcXjNVpOBLhj4H/L633mk/ux3AAAAAElFTkSuQmCC"/>
          </svg>
        </ul>
      </nav>
    </header>
    <section class="worksopen">
    <div class="worksopen_title">
        <h1>YAZY-GRAPH</h1>
        <p>趣味でNFTやグラフィックを描いたり落書きしたりで遊んでいます。
        <br>年賀状作ったり、次はステッカー作ってボムって来ようかな。と思います。
        </p>
       </div>
       <div class="works_content_hungly">
    <div>
        <img src="../image/works-image/yazy/wallpeper.jpg" alt="">
    </div>
    <div>
        <img src="../image/works-image/yazy/年賀状.jpg" alt="">
      </div>
    </div>
    <div class="yazynft_image">
      <img src="../image/works-image/yazy/wallpeper02.png" alt="">
    </div>
    <div class="yazynft_image2">
        <img src="../image/works-image/yazy/yazylogo2.jpg" alt="">
        <img src="" alt="">
      </div>
    </section>
    <footer>
        <p>Copyright ©︎ YAGI HAYATO All Rights Reserved</p>
      </footer>
  </body>
  </html>