#include <iostream>  //Basic library
#include <cmath>
using namespace std;

int north,middle,south,east,outer;

class Rain{
public:
Rain();
void ceiling();
void showResult();
private:
int nor,mid,sou,eas,out;
};

Rain::Rain(){
nor=mid=sou=eas=out=0;
}

void Rain::ceiling(){
nor=(north-north%20)/20+1;
mid=(middle-middle%20)/20+1;
sou=(south-south%20)/20+1;
eas=(east-east%20)/20+1;
out=(outer-outer%20)/20+1;
} 

void Rain::showResult(){
cout<<"北部:";
for(int i=0;i<nor;i++){
cout<<"|";
}
cout<<north<<endl;
cout<<"中部:";
for(int i=0;i<mid;i++){
cout<<"|";
}
cout<<middle<<endl;
cout<<"南部:";
for(int i=0;i<sou;i++){
cout<<"|";
}
cout<<south<<endl;
cout<<"東部:";
for(int i=0;i<eas;i++){
cout<<"|";
}
cout<<east<<endl;
cout<<"外島:";
for(int i=0;i<out;i++){
cout<<"|";
}
cout<<outer;
}

int main(){ 
Rain r;
cin>>north>>middle>>south>>east>>outer;
cout<<"各地區雨量:"<<endl;
r.ceiling();
r.showResult();
}