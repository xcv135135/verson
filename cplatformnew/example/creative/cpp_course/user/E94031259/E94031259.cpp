#include <iostream>  //Basic library
#include <cstdlib>  //system("pause")
using namespace std;

class Fruitdata
{
public:
	Fruitdata(string);
	string getname();
	void setseason(int);
	string seasonstring();
	void setprice(int,int);
	void setplace(string);
	int getseason();
	void printprice();
private:
	string fruitname;
	int season;
	int highprice;
	int lowprice;
	string place;	
};

Fruitdata::Fruitdata(string name)
	{
	fruitname=name;
	}
string Fruitdata::getname()
	{
	return fruitname;
	}
void Fruitdata::setseason(int n)
	{
	season=n;
	}
void Fruitdata::setprice(int hp,int lp)
	{
	highprice=hp;
	lowprice=lp;
	}
string Fruitdata::seasonstring()
	{
	if(season==1)
	return "spring";
	if(season==2)
	return "summer";
	if(season==3)
	return "fall";
	if(season==4)
	return "winter";
	}
int Fruitdata::getseason()
{
	return season;
}
void Fruitdata::setplace(string pl)
{
	place=pl;
}
string Fruitdata::getplace()
{
	return place;
}
void() Fruitdata::printprice()
	{
	cout<<"價格"<<lowprice<<"~"<<highprice;
	}

int main(){ 
	vetor<Fruitdata> Furitlist;
	Fuitdata mango("芒果");
	mango.setseason(2);
	mango.setplace("玉井");
	mango.setprice(140,70);
	vector.push_back(mango);
	int s;
	cout<<"請輸入季節1~4分別代表春夏秋冬"
	cint<<s;
	for(int i=0;i<Furitlist.size())
	if(Furitlist[i].getseason==s)
	{cout<<"水果名稱"<<Fruitlist[i].getname()<<"\n產季"<<Fruitlist[i].seasonstring()
	    <<"價格"
	Fruitlist[i].printprice();
	}
	
	


	
	return 0;
}