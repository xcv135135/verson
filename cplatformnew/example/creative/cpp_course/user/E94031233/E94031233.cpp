#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

int main(){ 
int a;
string array[8]={"高雄","台南","嘉義","台北"};
cout << "0=高雄,1=台南,2=嘉義,3=台北";
cin >> a;
if(a==0)
cout << "旗津";

else if(a==1) 
cout << "安平古堡";

else if(a==2)
cout << "農田";

else if (a==3)
cout << "西門町";

else 
cout << "please try again";
)


	
	return 0;
}