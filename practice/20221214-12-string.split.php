<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <textarea name="" id="ta" cols="30" rows="10"></textarea>

  <script>
    const str = `01李 02王 03張 04劉 05陳 06楊 07趙 08黃 09周 10吳

11徐 12孫 13胡 14朱 15高 16林 17何 18郭 19馬 20羅

21梁 22宋 23鄭 24謝 25韓 26唐 27馮 28於 29董 30蕭

31程 32曹 33袁 34鄧 35許 36傅 37沈 38曾 39彭 40呂
41蘇 42盧 43蔣 44蔡 45賈 46丁 47魏 48薛 49葉 50閻

51餘 52潘 53杜 54戴 55夏 56鍾 57汪 58田 59任 60姜

61范 62方 63石 64姚 65譚 66廖 67鄒 68熊 69金 70陸

71郝 72孔 73白 74崔 75康 76毛 77邱 78秦 79江 80史

81顧 82侯 83邵 84孟 85龍 86萬 87段 88漕 89錢 90湯

91尹 92黎 93易 94常 95武 96喬 97賀 98賴 99龔`;


    const ar = str.split(/\s*\d{2}/);
    console.log(ar);

    ta.value = JSON.stringify(ar);
  </script>
</body>

</html>