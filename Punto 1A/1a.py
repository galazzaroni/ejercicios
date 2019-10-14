def longestWord(phrase):
  length = 0
  words = phrase.split(" ")
  for x in words:
    lenWord = len(x)
    if lenWord > length: 
      length = lenWord
      word = x
  print(length, word)

phrase = "El veloz murciélago hindú comía feliz cardillo y kiwi";

longestWord(phrase)