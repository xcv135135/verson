<html>
  <body>
    <div class="container" id="container">
      <div class="col-xs-12 col-sm-9">

      <div class="jumbotron">
           <p>1.3 簡單的C++</p>
            來看第一個簡單的C++程式，它雖然嬌小，卻包含C++最基本的概念哦！
            程式碼如下：
            <div class="alert alert-success">
            //簡單的C++程式
            <br>
            #include < iostream>             // 含括iostream檔案
            <br>
            #include < cstdlib>            // 含括cstdlib檔案
            <br>
            using namespace std;            // 使用std名稱空間
            <br>
            int main(void)
            <br>
            {
            <br>
               int num;                   // 宣告整數num
               <br>
               num=3;                   // 將num設值為3
               <br>
               cout << "I have " << num << " apples."<< endl; //印出字串及變數內容
               <br>
               cout << "You have " << num << " apples, too." << endl;
               <br>
               system("pause");
               <br>
               return 0;
               <br>
            }
            <br>
            </div>
            此程式的執行結果為：
            <br>
            <div class="alert alert-info">
            I have 3 apples.
            <br>
            You have 3 apples, too.
            <br>
            </div>
             <br>
 <p>*1.3.1 程式解說</p>
（1）第一行(// 簡單的C++程式)為程式的註解，C++註解是以「//」記號開始，至該行結束來表示註解的文字．註解有助於程式的閱讀與偵錯，然而註解僅提供程式設計師閱讀，因此當編譯器讀到「//」時，會直接跳過「//」後面的文字而不做編譯，請注意「//」只影響同一行的敘述。
<br> <br>
(2)第二行與第三行
#include <iostream>             // 含括iostream檔案
<br>
#include <cstdlib>            // 含括cstdlib檔案
<br>
則是告訴編譯器把iostream與cstdlib這兩個檔案利用箝制處理指令 #include含括進來。Iostream 為input/output stream的縮寫，意思為輸入/輸出串流，C++裡有關輸入與輸出的函數大部分都定義在此iostream裡。
Cstdlib是標準函式庫standard library的縮寫。C++裡有許多好用的函數在此，如第11行的system()函數是其中之一。
<br> <br>
(3)第四行
Using namespace std;
<br>
是用來設定名稱空間(name space)為std。在ANSI/ISO C++標準函式庫(library)裡所包含的函數、類別與物件等均是定義在std這個名稱空間內，所以必須指明使用的名稱空間為std，以便使用C++所提供的標準函式庫。
使用名稱空間(name space)的用意是他可以區別變數，使得在不同名稱空間的變數或函數，即使具有相同名稱也不會被受干擾。
然而，第4行的設定名稱空間為std也不是非用不可。若不想撰寫第4行，則必須在第9、10行的cout與endl物件之前加上「std::」使得他們成為如下的敘述
<br>
std::cout << "I have " << num << " apples."<< std::endl; 
<br>
std::cout << "You have " << num << " apples, too." << std::endl;
<br>
如此在撰寫上稍嫌麻煩，所以還是建議加入第4行名稱空間的設定。
<br> <br>
(4)第5行的main()函數為程式執行的起點，main()函數的區塊(block)從第6行的左大括號("{")到第13行的右大括號("}")為止。在此不防把main()
<br>
稱為主函數，它不但是程式開始的執行起始點，同時也是每個獨立的C++程式都必須要有的函數，沒有main()程式無法執行。
在C++裡，函數與一般的變數都有型態，如整數、浮點數與字元等型態，在第5行的main()前面加上int，用來表示main()函數的傳回值為整數型態，而main()的引數void即代表main()函數不需要傳入任何的引數(void的原意即為空無一物之意)。
<br> <br>
(5)第7行
   int num;                   // 宣告整數num
   <br>
宣告num為一個整數(integer)型態的變數。C++有別於其他直譯器的語言(如Basic)，使用變數之前必須之宣告其型態。
<br> <br>
(6)第8行敘述
<br>
num=3;                    // 將num設值為3
<br>
為一設定敘述，即把整數3設定給存放在整數的變數num。
<br> <br>
(7)第9行的敘述
cout << "I have " << num << " apples."<< endl; //印出字串及變數內容
<br>
cout可想像成C++的標準輸出裝置(通常指螢幕)，而<< 運算子(operator)則是把其右邊的字串或變數值送到標準輸出裝置，即一般的螢幕上。第9行執行時字串”I have”會輸出到螢幕上，接下來傳送num的值(num值為3)，接著再傳送字串”apples.”，最後再送上換行碼endl，告訴電腦必須於此處換行。endl是end of line 的縮寫，此外，cout、endl與<< 運算子均定義在iostream檔案內，因此程式第2行必須把它包括進來。
<br> <br>
(8)第10行敘述的語法與第9行相同，只是列印不同的字串而已。
<br> <br>
(9)第11行的作用是利用system()函數呼叫系統指令pause，使得程式執行到這而便先暫停。由於Visual Studio執行C++程式顯示結果後便會自動關閉DOS視窗，而導致看不見輸出的畫面，因此可利用此行的敘述來暫停程式。由於system()函數定義在標頭檔cstdlib裡，所以第3行必須將cstdlib這個檔案給含括進來。
<br> <br>
(10)第12行利用Rrturn關鍵字傳回整數0，此數值由系統接收，代表程式可以順利執行完成。由於傳回值為整數型態，所以第5行的main()函數必須指明其傳回值的型態為整數(int)。



      </div>
      </div>
    </div>
  </body>
</html>