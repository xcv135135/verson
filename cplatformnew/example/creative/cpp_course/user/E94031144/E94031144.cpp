#include <iostream>  //Basic library
#include <string>
#include <vector>
using namespace std;

clase information
{
public:

information(string a, int b, int c )
{P=a;R=b;C=c;}

string getP()
{return P;}

int getR()
{return R;}

string getC()
{return C;}


private:

string P;
int R;
string C;

};
//endclass


int main(){ 

int n;
string goal;
vector<information>deck;
int sum=0;

string P;
int R;
string C;

cout<< "How many data you have? ";
cin>>n;

for(int i=0; i<n; i++)
{
cout<<endl<< "Enter Place(string): ";
cin>>P;
cout<<endl<< "Enter rain(int): ";
cin>>R;
cout<<endl<< "Enter counity(string): ";
cin>>C;

information ItoPush(P,R,C);
deck.push_back(TtoPush);

}


cout<<"What countity you want to know? ";
cin>>goal;


for(int i=0; i<n; i++)
{
if (deck[i].getC()==goal)
sum +=deck[i].getR(); 
}

cout<<"total rain in "<<goal<<" is: "<<sum;


	return 0;
}

