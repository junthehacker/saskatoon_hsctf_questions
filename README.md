# Saskatoon HSCTF Questions

## Web Exploit

##### Question 1 - Comment Fever [Very Easy]

###### Description
Marcus recently learned how to build websites. He knows that HTML comment cannot be seen on the page. So he decided to remind himself of his own password in the comment.

His website is located at:
```
hsctf.wmcicompsci.ca/xxxxx
```

###### Goal
Tell Marcus it’s not secure to do that by finding the password.
Flag for this question is the password.

##### Question 2 - Stylish [Easy]

###### Description
Marcus learned his lesson on HTML comments.
He keeps studying web technologies, now he learns how to use CSS. And he thought he could securely hide the password from visitors this time around.

His website is located at:
```
hsctf.wmcicompsci.ca/xxxxx
```

###### Goal
Tell Marcus it’s not secure to do that by finding the password.
Flag for this question is the password.

##### Question 3 - Choose Your Side [Easy]

###### Description
Marcus did not give up.
Now he knows how to use JavaScript. You know what happened, right?

His website is located at:
```
hsctf.wmcicompsci.ca/xxxxx
```

###### Goal
Tell Marcus it’s not secure to do that by finding the password.
Flag for this question is the password.

##### Question 4 - QmFzZTY0 [Easy]

###### Description
Marcus cannot believe his website got hacked again. So he hired an experienced web developer. The web developer told Marcus to encrypt his code.
However, you know this will not make much of the difference.

His website is located at:
```
hsctf.wmcicompsci.ca/xxxxx
```

###### Goal
Tell Marcus it’s not secure to do that by finding the password.
Flag for this question is the password.

##### Question 5 - Pizza Injection [Medium]

###### Description
A pizza company has a promotion going on. If you bought the lucky pizza which contains a promotion code in the box. You will receive free pizza for the rest of your life!<br>
However, the website used for this company is developed by a very bad developer, because many people that has used this website reports that when they enter xxx’xxx in the promotion code field, they receive a weird error:
```
error near query ‘* FROM promotion_code WHERE ‘’ Please check….
```
You know something is going on with this website. And you want to receive free pizza for the rest of your life.

The company’s website is located at:
```
hsctf.wmcicompsci.ca/pizza
```

###### Goal
Hack the website and receive free pizza for the rest of your life!<br>
The flag will be revealed after you successfully enter the promotion code.

##### Question 6 - DROP ‘em All [Medium]

###### Description
You posted an article on a website called [Need a name]. There are a lot of hate comments. And the blogging system does not allow you to delete the comment.<br>
However, you know there are going to be security exploits that allows you to delete all the comments.

Your article is located at:
```
hsctf.wmcicompsci.ca/xxxxx
```

###### Goal
Delete all hate comments.

##### Question 7 - JSON [Medium]
Self re-tweet script

##### Question 8 - Badly stored password (SQL Injection & Brute force) [Hard]
Brute force 4 digit password, and retrive the flag from database

##### Question 9 - Unrestricted folder [Hard]
Retrive data from `config/` folder

##### Question 10 - Badly stored password 2 (SQL Injection, Brute force & Data Analyzation) [Insane]
Brute force 4 digit passowrd, and retrive the flag by analyzing similarities between hashes

## Reverse Engineering

##### Question 1 - Open [Super Easy] - General Question
Flag is available in a text file.

```
#the password is hsctf{kFt6leI95Pj8OVCeHV}

entry=input()

print(entry)
```

Answer: hsctf{kFt6leI95Pj8OVCeHV}

##### Question 2 - Run [Super Easy]
Run the code to output the answer.
```
# don't overthink this problem...

input="elevendigit"

def password_decrypter(password):
    changed=changer(password)
    weird=wierder(changed)
    print (weird)
def changer(q):
    altered_password=""
    for c in q: altered_password+=chr(ord(c)*2)
    return altered_password
def wierder(l):
    o=""
    cu=-1
    c=[98,101,103,120,100,97,99,113,91,89,107]
    for h in l:
        cu+=1
        o+=chr((ord(h)-c[cu]))
    return(o)

password_decrypter(input)

```

Answer: hsctf{easy}

##### Question 3 - Search [Easy]
Find the flag somewhat hidden in the code. (I won't include the code here because it's reallllllly long.) Use the search button or just play the game.


Answer: hsctf{circle}


##### Question 4 - Print [Easy]
Edit some code by writing print in front of a function in order to print the output of a decryption function 
```
# don't overthink this problem either...

input="unknowndigits"

def password_decrypter(password):
    changed=changer(password)
    weird=weirder(changed)
def changer(q):
    altered_password=""
    for c in q: altered_password+=chr(ord(c)*2)
    return altered_password
def weirder(l):
    o=""
    cu=-1
    c=[98,101,103,120,100,97,133,103,109,89,105,101,98,202,123]
    for h in l:
        cu+=1
        o+=chr((ord(h)-c[cu]))
    return(o)
def newFunction():
    p="Bacon ipsum dolor amet proident short loin ut pariatur consectetur t-bone cupidatat aliqua et fatback filet mignon ham prosciutto leberkas. Non ut beef ribs doner consectetur ea id pork loin fatback spare ribs kielbasa cillum ball tip. Duis andouille pancetta, anim adipisicing turducken chicken tri-tip t-bone.{ Officia prosciutto minim, aliquip esse ullamco ut do dolore sausage jerky quis ham hock ground round elit. Exercitation bacon ex pastrami, dolor short loin aute. Pastrami ground round enim aliqua, anim capicola officia elit spare ribs swine strip steak ullamco sed labore. Swine porchetta ad aliqua. Rump in aute tri-tip, pork belly id pork loin et frankfurter dolore ullamco ut tail lorem. Labore salami aute esse shankle jowl tempor mollit ground round venison fugiat enim elit chuck eu. Ham hock shank elit aliqua. Sausage alcatra ullamco brisket dolore minim tempor biltong ut qui sunt aliqua swine nisi chicken. Andouille shankle porchetta rump tempor doner. Chuck brisket short loin nisi. Dolor in lflank eu duis ham fatback.Rump in jerky landjaeger tail eiusmod enim swine velit non brisket. Kielbasa laboris veniam, mollit aute frankfurter andouille. Landjaeger in beef ribs tongue short loin in eiusmod porchetta filet mignon magna irure aliqua. Leberkas reprehenderit pig shoulder fiet mignon laborum porchetta bacon strip steak qui et ut alcatra dolor sirloin. Jowl doner spare ribs porchetta dolore elit et turkey in salami.Adipisicing ex turducken magna. Ex strip steak sausage short ribs cupim. Deserunt proident occaecat, frankfurter swine in aliqua andouille ut tri-tip ex eiusmod bacon. }Labore pancetta tenderloin duis sint laboris ea tri-tip pork fugiat. Andouille sint rump, sed officia landjaeger boudin sirloin mollit ullamco capicola enim. Boudin beef ribs chicken, fugiat pig lorem doner labore chuck pork chop_excepteur pican"
    return (p[115]+p[166]+p[1793]+p[67]+p[776]+p[311]+p[1388]+p[160]+p[1220]+p[1454]+p[1847]+p[1024]+p[1611]+p[548]+p[1056]+p[1617])

password_decrypter(input)

```

Answer: hsctf{less_easy}

##### Question 5 - Semi-Caesar [Medium]
Move the characters a certain amount, given in the code (eg. 12). Use a caesar cypher to reverse a encrypted password by that much.

The output from this program was hsctf{iqxxpazq}. What is the flag?

```
flag=input()

encodedFlag=""
for c in flag:
    k=((ord(c)+12))
    if k>122 or (k>90 and k<102):
        k=k-26
    encodedFlag+=chr(k)
print("hsctf{"+encodedFlag+"}")
```

Answer: hsctf{welldone}


##### Question 6 - Make the Crossing [Medium]

This is a simple reverse engineering task. 

Problem Text: The output from the program was  this_isn't _the_real_password . What is the flag?

```
input=input ()

def password_crypter(password):

    split_password=password.split("_")

    split_password.reverse()

    split_password[3]="isn't"
    split_password[0]=split_password[0][:-1]
    split_password.remove("hsctf{however")

    split_password.reverse()

    new_password=""

    for i in split_password:
        new_password=new_password+i+"_"
    print(new_password[:-1])


password_crypter(input)


```

Answer:
hsctf{however_this_is_the_real_password}

##### Question 7 - Arithmetic [Medium]
Divide each character in a code by a certain number.

Problem text: Someone left their python pyscripter open, but removed the password from their password? Can you figure out what it is?

The printed value was ÐæÆèÌöÊðÆÊØØÊÜè¾äÊìÊäæÂØú and the python program is altered.py

```passphrase="<redacted>"

def altered(password):
    altered_password=""
    for character in password:
        altered_password+=chr(ord(character)*2)
    return altered_password

print(altered(passphrase))
```

Answer: hsctf{excellent_reversal}

##### Question 8 - Functions [Hard]
Perform several functions on a code to encrypt it (convert it from base 35 to decimal, take its square root)

The stored value for this password is 1209389. What is the password?

```
entry=input()

def passwordChecker(password):
    i=int(password,35);
    i=i**0.5
    return (i==1209389)

print(passwordChecker(entry));

```

Hint: all letters in the answer are uppercase and the answer is surrounded by hsctf{answer}

Answer: hsctf{MPMU1VH1}


##### Question 9 - Actual Encryption [Very Hard]
Perform an actual encryption on the data, but without salt.

We hacked into a database, but all the passwords don't make any sense. We have their encryption algorithm, but the data says the password is f3bf4a6112f787896be54dff9c5c637310832acd61cf3f7ca3be573e6244bf94. Can you help us figure out what the password is?

Hint: Yes. We know the module does not exist. Use the internet.

```
from passlib.hash import sha256_crypt

entry=input()

newpassword=open("passwordstorage.txt")

def passwordEncrypter(password):
    h = sha256_crypt.encrypt(password)
    return (newpassword==h)

print(passwordChecker(entry));
```

Solution: Put the hash value into an online decrypter

Answer: hsctf{uns@lted}

##### Question 10 - perform an actual encryption on the data, with salt. [Insane]
Perform an actual encryption on the data, with salt. The data is b6c56a1491a6c44fcb88a4d00e86f59b8f7c1fab6e2fdf6a1aa7e7c9dcba5409

Hint: Again, we know it's the same code as the previous question with the module not existing. 

Solution: Download a list of the most common passwords (the actual password is monkey) and encrypt it to test.

```
from passlib.hash import sha256_crypt

entry=input()

newpassword=open("passwordstorage.txt")

def passwordEncrypter(password):
    h = sha256_crypt.encrypt(password+"kj2bd28hda23")
    return (newpassword==h)

print(passwordChecker(entry));
```

Answer:hsctf{monkey}

## Forensics/Recon

##### Question 1 -  [Super Easy]

hsctf{BLUE}

##### Question 2 -  

hsctf{pikapika}


##### Question 3 -

hsctf{surprise}

##### Question 4 - 

hsctf{vinci}


##### Question 5 - 

hsctf{cat}

##### Question 6 - 



##### Question 7 -



##### Question 8 -



##### Question 9 - 




##### Question 10 - 



## Cryptography

##### Question 1 -  Julius Caesar [Super Easy]
###### Description
###### Hint
Caesar Cypher

###### Encrypted Text
```
Ftue ue azq ar ftq euybxqef qzodkbfuaz yqftape. Rxms"OMQEMD OKBTQD"
```
###### Flag
CAESAR CYPHER

###### Decryption
```
Text:
This is one of the simplest encryption methods. Flag"CAESAR CYPHER"

Key: (Alphabetical Shift) -12
```

##### Question 2 - Caesar is a Troll [Easy] 
###### Description
###### Hint
Keep trying.

###### Encrypted Text
```
Vwxm >;). Qrw txlwh. Ayf hnhpu. Trggvat jnezre. Pabdhi! Nj, nj xgjnz!!! Qeb cixd fp "VTQNNKPI AQW!!!"
```
###### Flag
TROLLING YOU!!!

###### Decryption
```
Text: 
Nope >;). Not quite. Try again. Getting Warmer. Almost! So, so, close!!! The flag is"TROLLING YOU!!!"

Key:(Alphabetical Shift)[Multi-Key]  -2 to 24 shifts
```

##### Question 3 - Substitution [Medium]
###### Description
###### Hint
Shuffled Alphabet

###### Encrypted Text
```
Prbt bt a towtpbpopbfh xvkrdu. Leag"TROLLED"
```

###### Flag
SHUFFLE

###### Decryption
```
Text:
This is a substitution cypher. Flag"SHUFFLE"

Key: (Alphabetical Shuffle) AWXYDLGRBIJECHFKQUTPOMNSVZ
```

##### Question 4 -  
###### Discription
###### Hint
The flag is in the.

###### Encrypted Text
```
Sqm nwbo ti tz sqm vme.
```

###### Flag
CYPHER

###### Decryption
```
Text:
The flag is in the key.

Key: (Alphabetical Shuffle) BDJKMNOQTUVWXZFLAGISCYPHER
```


##### Question 5 - Polyalphabetic
###### Discription
###### Hint
Repeating key word shift.

###### Encrypted Text
```
Lpuh tw s xaajedxtpmilqo tygjgbitsf. Nxpr"ZAOQCPVW"
```
###### Flag
VIGENERE

###### Decryption
```
Text:
This is a polyalphabetic encryption. Flag"VIGENERE"

Key: (Repeating Keyword Shift) SIMPLE
```

##### Question 6 - 
###### Discription
###### Hint
Longer key word.

###### Encrypted Text
```
Gvx lgfoqg elr yxy lzm ntexrf. Ylsy"TACRORM"
```
###### Flag
LONGKEY

###### Decryption
```
Text:
The longer the key the better. Flag"LONGKEY"

Key: (Repeating Keyword Shift) NOTASSIMPLE
```

##### Question 7 - In the Key
###### Discription
###### Hint
In the key.

###### Encrypted Text
```
Yse leho aa ax xfj vee...
```
###### Flag
THISISKEY

###### Decryption
```
Text:
The flag is in the key...

Key: (Repeating Keyword Shift) FLAGTHISISKEY
```

##### Question 8 - XOR [Hard]
###### Discription
###### Hint
Hexadecimal Shifts

###### Encrypted Text
```
Hex:
3e1c180e1c0f5d3e040d15180f5d0a1409155d1f0409180e5c5d3b111c1a5f3f34292e5b3f2429382e5f

Text:
>\x1c\x18\x0e\x1c\x0f]>\x04\r\x15\x18\x0f]\n\x14\t\x15]\x1f\x04\t\x18\x0e\\];\x11\x1c\x1a_?4).[?$)8._

```
###### Flag
BITS&BYTES

###### Decryption
```
Text:
Caesar Cypher with bytes! Flag"BITS&BYTES"
(Hex) 4361657361722043797068657220776974682062797465732120466c6167224249545326425954455322

Key: 7d or "}"
```

##### Question 9 -  
###### Discription
###### Hint
The cypher is like the 'Polyalphabetic' problem but with bytes instead of letters.

###### Encrypted Text
```
Hex:
7a3f70497c48681127123b082a0824083c082d12680026056818271468072714260568083c40682724002f437a3f700f6a

Text:
z?pI|Hh\x11'\x12;\x08*\x08$\x08<\x08-\x12h\x00&\x05h\x18'\x14h\x07'\x14&\x05h\x08<@h'$\x00/Cz?p\x0fj
```
###### Flag
2^8n

###### Decryption
```
Text:
2^8(4) possibilities and you found it! Flag"2^8n"
(Hex) 325e3828342920706f73736962696c697469657320616e6420796f7520666f756e642069742120466c616722325e386e22

Key:(Hexadecimal Shift) (Hex)48614861 or "HaHa"
```


##### Question 10 - Breakable 
###### Description
###### Hint
Everything we covered.

###### Encrypted Text
```
Hex:
685f5e0a4b0a5d435e4942060a6f5c4f060a5d4b590a4643595e4f4443444d0468490a5259440a5958444b475e4f44580a5259440a4b434e4845415a0a4048420a59440a4b4f45440a42465a0a5e59490a4e520a5c430a4440480a5c5a5c595b47444c0a474f040a73485e0a595f485e4d464546585a590a5a4b5e484343464e5a0a44494e0a594b585d464e53040a6844404708796c0d6c0a6272640a73696569796268646608

Text:
h_^\nK\n]C^IB\x06\no\\O\x06\n]KY\nFCY^ODCDM\x04hI\nRYD\nYXDKG^ODX\nRYD\nKCNHEAZ\n@HB\nYD\nKOED\nBFZ\n^YI\nNR\n\\C\nD@H\n\\Z\\Y[GDL\nGO\x04\nsH^\nY_H^MFEFXZY\nZK^HCCFNZ\nDIN\nYKX]FNS\x04\nhD@G\x08yl\rl\nbrd\nsieiybhdf\x08
```
###### Flag
IT'S ALL BREAKABLE

###### Decryption
```
Text:
Once there was a man and the man wanted to send someone a message. 
But a witch, Eve, was listening.
So the encrypted the message and he made the key so he can remember it.
Eve adventually decrypted the message.
Flag"IT'S ALL BREAKABLE"

Key: [Multi-Key]
(Hexadecimal Key Shift) 'Jack'
(Hexadecimal Shift) '*'
(Key Word Shift) Joel
(Alphabetic Shuffle) HJKLPQSTUBFGOVZXYNICANDREW
(Alphabetic Shift) 16


