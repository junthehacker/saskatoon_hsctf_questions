# Saskatoon HSCTF Questions

## Web

##### Question 1 - Recon [Easy]
Flag is hidden in the source
```html
<button>Submit</button>
    </form>
    <!--Just in case... Admin password is hsctf{i_love_saskatoonhsctf}-->
  </body>
</html>
```

##### Question 2 - Recon [Easy]
Delete `style="display:none;"`
```html
<h2>Classifications</h2>
    <p style="display:none;">
      Several subgroups of the computer underground with different attitudes use different terms to demarcate themselves from each other, or try 
```

##### Question 3 - Recon [Easy]
Simple question, flag is hidden in `<script>` tags
```html
<script type="text/javascript">
  var code = "duajbx928dlxdlh1";
  function checkCoupon(){
    if($("#coupon-field").val() == code){
      alert("your flag is hsctf{question3}");
    } else {
      alert("oops, try again");
    }
  }
</script>
```

##### Question 4 - Base64 & Console [Easy]
Same as question 3, but flag is encrypted using base64. Use console to solve the question.
```
> atob("eW91ciBmbGFnIGlzIGhzY3Rme3F1ZXN0aW9uNH0=");
< "your flag is hsctf{question4}" = $1
```

##### Question 5 - SQL Injection [Medium]
SQL Injection. Type `' OR '1'='1` for the password.

It will result in a query like this `SELECT * FROM user WHERE username='xxx' AND password='' OR '1' = '1'`

##### Question 6 - SQL Injection 2 [Medium]
Get the flag from database

##### Question 7 - XSS (Cross-Site Scripting) [Medium]
Self re-tweet script

##### Question 8 - Badly stored password (SQL Injection & Brute force) [Hard]
Brute force 4 digit password, and retrive the flag from database

##### Question 9 - Unrestricted folder [Hard]
Retrive data from `config/` folder

##### Question 10 - Badly stored password 2 (SQL Injection, Brute force & Data Analyzation) [Insane]
Brute force 4 digit passowrd, and retrive the flag by analyzing similarities between hashes

## Reverse Engineering

##### Question 0 - Open [Super Easy] - General Question
Flag is available in a text file.

```
#the password is hsctf{kFt6leI95Pj8OVCeHV}

entry=input()

print(entry)
```

Answer: hsctf{kFt6leI95Pj8OVCeHV}

##### Question 1 - Run [Super Easy]
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

##### Question 2 - Search [Easy]
Find the flag somewhat hidden in the code. (I won't include the code here because it's reallllllly long.) Use the search button or just play the game.


Answer: hsctf{circle}


##### Question 3 - Print [Easy]
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

##### Question 4 - Semi-Caesar [Medium]
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


##### Question 4.5 - Make the Crossing [Medium]

This is a simple reverse engineering task

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

##### Question 5 - Arithmetic [Medium]
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

##### Question 6 - Floor [Medium]
Floor Division (and analyzing the code).

##### Question 7 - Multiple [Medium]
Multiply and add to encode/decode.

##### Question 8 - Functions [Hard]
Perform several functions on a code to encrypt it (eg. convert to hex, square each digit in hex, output list of hex) give functions to reverse engineer.

##### Question 9 - TBD [Hard]

##### Question 10 - TBD [Insane]



## Forensics/Recon

##### Question 1 -  [Super Easy]



##### Question 2 -  




##### Question 3 -



##### Question 4 - 




##### Question 5 - 



##### Question 6 - 



##### Question 7 -



##### Question 8 -



##### Question 9 - 




##### Question 10 - 



## Cryptography


##### Question 1 -  [Super Easy]



##### Question 2 -  




##### Question 3 -



##### Question 4 - 




##### Question 5 - 



##### Question 6 - 



##### Question 7 -



##### Question 8 -



##### Question 9 - 




##### Question 10 - 


