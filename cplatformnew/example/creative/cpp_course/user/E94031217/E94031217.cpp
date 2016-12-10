#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

int main(){ 
  int month;
   cin>>month;
 if(month==3||month==4||month==5)
   cout<<"Spring";
 else
    if(month==6||month==7||month==8)
      cout<<"Summer";
    else
       if(month==9||month==10||month==11)
         cout<<"Fall";
       else
          if(month==12||month==1||month==2)
            cout<<"Winter";
          else
             cout<<"The number that you input doesn't exist in months.";

	
	return 0;
}