<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p> 3.1.7 邏輯運算子與位元運算子</p>
在邏輯上有所謂的「且」、「或」與「反」運算，在C++中也提供這幾個基本邏輯運算所需的「邏輯運算子」（Logical operator），分別為「且」（&&）、「或」（||）及「反相」（!）三個運算子。 
<br>
來看看下面這個程式會輸出什麼？
<div class="alert alert-success">
  int num = 75; 
  <br>
cout <<  (num > 70 && num < 80) << endl; 
<br>
cout << (num > 80 || num < 75) << endl; 
<br>
cout << !(num > 80 || num < 75) << endl;

</div>

三段程式分別會輸出1、0與1，也就是分別表示true、false與true三種狀況。 
<br>
&&運算中，如果左邊的式子已經被評斷為false，則可立即判斷整個式子為false，因而右邊的式子就不會再評斷； 
<br>
|| 運算中如果左邊的式子已經被評斷為true，則可以判斷整個式子為true，因而右邊的式子就不會再評斷。
<br>
接下來看看「位元運算子」（Bitwise operator），數位設計上有AND、OR、NOT、XOR與補數等運算，在C++中提供這些運算的就是位元運算子，它們的對應分別是AND （&）、OR（|）、NOT（!）、XOR（^）與補數（~）。 
<br>

如果您不會基本的位元運算，這邊可以提供一個程式來顯示各個運算的結果： 

<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
 <br>
int main() { 
<br>
    cout << "AND運算：" << endl; 
    <br>
    cout << "0 AND 0\t\t" << (0 & 0) << endl; 
    <br>
    cout << "0 AND 1\t\t" << (0 & 1) << endl; 
    <br>
    cout << "1 AND 0\t\t" << (1 & 0) << endl; 
    <br>
    cout << "1 AND 1\t\t" << (1 & 1) << endl; 
    <br>
<br>
    cout << "OR運算：" << endl; 
    <br>
    cout << "0 OR 0\t\t" << (0 | 0) << endl; 
    <br>
    cout << "0 OR 1\t\t" << (0 | 1) << endl; 
    <br>
    cout << "1 OR 0\t\t" << (1 | 0) << endl; 
    <br>
    cout << "1 OR 1\t\t" << (1 | 1) << endl; 
    <br><br>

    cout << "XOR運算：" << endl; 
    <br>
    cout << "0 XOR 1\t\t" << (0 ^ 1) << endl; 
    <br>
    cout << "0 XOR 0\t\t" << (0 ^ 0) << endl; 
    <br>
    cout << "1 XOR 0\t\t" << (1 ^ 0) << endl; 
    <br>
    cout << "1 XOR 1\t\t" << (1 ^ 1) << endl; 
    <br><br>

    cout << "NOT運算：" << endl; 
    <br>
    cout << "NOT 0\t\t" << (!0) << endl; 
    <br>
    cout << "NOT 1\t\t" << (!1) << endl; 
    <br><br>
 
    return 0;
    <br>
}
</div>


OUTPUT:

<div class="alert alert-info">
AND運算： 
 <br>
0 AND 0  &nbsp;&nbsp;&nbsp;       0 
 <br>
0 AND 1  &nbsp;&nbsp;&nbsp;       0 
 <br>
1 AND 0  &nbsp;&nbsp;&nbsp;       0 
 <br>
1 AND 1  &nbsp;&nbsp;&nbsp;       1 
 <br>
OR運算： 
 <br>
0 OR 0   &nbsp;&nbsp;&nbsp;       0 
 <br>
0 OR 1   &nbsp;&nbsp;&nbsp;       1 
 <br>
1 OR 0   &nbsp;&nbsp;&nbsp;       1 
 <br>
1 OR 1   &nbsp;&nbsp;&nbsp;       1 
 <br>
XOR運算： 
 <br>
0 XOR 0  &nbsp;&nbsp;&nbsp;       0 
 <br>
0 XOR 1  &nbsp;&nbsp;&nbsp;       1 
 <br>
1 XOR 0  &nbsp;&nbsp;&nbsp;       1 
 <br>
1 XOR 1  &nbsp;&nbsp;&nbsp;       0 
 <br>
NOT運算： 
 <br>
NOT 0   &nbsp;&nbsp;&nbsp;        1 
 <br>
NOT 1   &nbsp;&nbsp;&nbsp;        0
</div>

C++中的位元運算是逐位元運算的，例如10010001與01000001作AND運算，是一個一個位元對應運算，答案就是00000001；而補數運 算是將所有的位元0變1，1變0，例如00000001經補數運算就會變為11111110，例如下面這個程式所示：
<div class="alert alert-success">
  char num = 255; 
  <br>
cout << static_cast<int>(~num);

</div>
這段程式會在主控台顯示0，char使用一個位元組，若用於儲存正整數最大可儲存255的值，255的二進位表示法為11111111，經補數運算就是 00000000，也就是0。 
<br>
要注意的是，邏輯運算子與位元運算子也是很常被混淆的，像是&&為邏輯運算，而&為位元運算，||為邏 輯運算，而|為位元運算， 初學時可得多注意。
<br>
位元運算對初學者來說的確較不常用，但如果用的洽當的話，可以增進不少程式效率，例如下面這個程式可以判斷使用者的輸入是否為奇數：
<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
 <br>
int main() { 
 <br>
    int input = 0; 
     <br> <br>

    cout << "輸入正整數："; 
     <br>
    cin >> input; 
     <br>
    cout << "輸入為奇數？" << (input&1 ? 'Y' : 'N')    << endl; 
          <br> <br>
 
    return 0;

}

</div>


OUTPUT:

<div class="alert alert-info">
  輸入正整數：5
  <br>
輸入為奇數？Y
</div> 

這個程式得以運算的原理是，奇數的數值若以二進位來表示，其最右邊的位元必為1，而偶數最右邊的位元必為0，所以您使用1來與輸入的值作AND運算，由於 1除了最右邊的位元為1之外，其它位元都會是0，與輸入數值AND運算的結果，只會留下最右邊位元為0或為的結果，其它部份都被0 AND運算遮掉了，這就是所謂「位元遮罩」，例如：
<br>
00000100	4
<br>
00000001	1
<br>
00000000	判 斷為偶數
<br><br>


00000011	3
<br>
00000001	1
<br>
00000001	判 斷為奇數
<br>

XOR的運算較不常見，這邊舉個簡單的XOR字元加密例子，先看看程式：

<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
<br>
 <br>
int main() { 
<br>
    char ch = 'A'; 
    <br><br>

    cout << "before encoding：" << ch    << endl; 
<br><br>


    ch = ch^0x7; 
    <br>
    cout << "after encoding：" << ch  << endl; 
         <br>

    ch = ch^0x7; 
    <br>
    cout << "decoding：" << ch  << endl; 
         <br><br>
 
    return 0;
    <br>
}

</div>


OUTPUT:

<div class="alert alert-info">
  before encoding：A
  <br>
after encoding：F
<br>
decoding：A

</div>
0x7是C++中整數的16進位寫法，其實就是10進位的7，將位元與1作XOR的作用其實就是位元反轉，0x7的最右邊三個位元為1，所以其實就是反轉 ch的最後兩個字元，如下所示：
<br>
01000001	65 （對應 ASCII的'A'）
<br>
00000111	0x7
<br>
01000110	70 （對應 ASCII中的'F'）
<br>
同樣的，這個簡單的XOR字元加密，要解密也只要再進行相同的位元反轉就可以了。
<br>
要注意的是，雖然在說明時都只取8個位元來說明，但實際的位元在運算時，需依資料型態所佔的記憶體長度而定，例如在使用int型態的0作運算時，要考慮的 是32個位元，而不是只有8個位元，因為int佔有4個位元組。
<br>

在位元運算上，C++還有左移（<<）與右移（>>）兩個運算子，注意在這邊與cout與 cin所使用的<<與 >>作用是不一樣的；左移運算子會將所有的位元往左移指定的位數，左邊被擠出去的位元會被丟棄，而右邊會補上0；右移運算則 是相反，會將所有 的位元往右移指定的位數，右邊被擠出去的位元會被丟棄，至於左邊位元補0或補1則不一定，視系統而定。
<br>
您可以使用左移運算來作簡單的2次方運算示範，如下所示：

<div class="alert alert-success">
  #include < iostream>
  <br>
using namespace std;
  <br>
int main() { 
 <br>
    int num = 1; 
     <br>

    cout << "2的0次：" << num   << endl; 
          <br> <br>

    num = num << 1; 
     <br>
    cout << "2的1次：" << num    << endl; 
          <br> <br>

    num = num << 1;
     <br> 
    cout << "2的2次：" << num   << endl; 
          <br> <br>

    num = num << 1; 
     <br>
    cout << "2的3次：" << num    << endl; 
          <br> <br>
 
    return 0;
     <br>
}

</div>

OUTPUT:
<div class="alert alert-info">
  2的0次：1
  <br>
2的1次：2
<br>
2的2次：4
<br>
2的3次：8
</div>
實際來左移看看就知道為何可以如此運算了： 
<br>
00000001	1
<br>
00000010	2
<br>
00000100	4
<br>
00001000	8
<br>

      </div>
      </div>
    </div>
  </body>
</html>