 
 
#include<iostream>
using namespace std;

class cloud
{
public:
cloud(string cloudsize=3);
void switch();

private:
int e;
};
 

#include <iostream> 
#include<string.h>
#include"cloud.h"

using namespace std;

clod::cloud(string cloudsize=3)
{ 
const string cloudsize=3;

string c[cloudsize]={"積雨雲","雷雲","地震雲"}

int e =c[cloudsize];

for(int i=0; i<3;i++)

cout<<c[i]<<endl;

cin>>e;

switch(e)
{
case a:
cout<<"下大雨";
break;

case b:
cout<<"打雷";
break;

case c:

cout<<"預示地震";
break;

default:

cin>>e;
}
;
}


	