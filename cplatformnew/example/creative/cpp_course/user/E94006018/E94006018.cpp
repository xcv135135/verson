#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

char have[9]={'澳洲','韓國','日本','印度','義大利','台南','大湖'}
int  havenum[9]={1200,900,800,700,600,90,80,70,60};

char  *search1="五大洲";
char  *search2="國家";
char  *search3="地名";
int   key;

int main(){ 
      int num;
      int  check=1;
       while(check==1){
	cout << "起輸入想搜尋的類別"<<endl<<"1.五大洲"<<endl;
        cout << "2.國家"<<endl<<"3.地名"<<endl;
        cin>>num;
       switch(num)
             {case 1:key=1000;
                     check=2;
                     break;
              case 2:key=100 ;
                     check=2;
                     break;
              case 3:key=10;
                     check=2;
                     break;
               default:     
                        cout<<"請輸入1~3";
                       check=1;

                }
       }

if(1000<key<10000)
    cout<<have[0]<<endl;
else if(100<key<1000){
           for(int a=1;a<5;a++)
               cout<<have[a]<<endl;
               }
else if(10<key<100){
            for(int a=5;a<9;a++)
                 cout<<have[a]<<endl;
            } 
   
       

	
	return 0;
}