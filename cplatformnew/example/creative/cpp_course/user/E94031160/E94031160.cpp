#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

class t
{
public:
       t();
       void setname(string);
       int  getname();
       void printresult();
       int search(string);
private:
     string a;
     ;

void t::setname(string landname)
  {
   a=landname;
   };

int t::getname()
  {
   return a;
   }

void t::printresult()
  {
   cout << search(a);
  }
int t::search(string b)
  {
   if (b==孔廟)
    return "YES";
   else
    return "找不到請重新輸入";
   }
};

int main(){ 

class t;
int name;
cout<<"請輸入想搜尋的東西"
cin >> name;

t.setname(name);
t.printresult();

	
	return 0;
}