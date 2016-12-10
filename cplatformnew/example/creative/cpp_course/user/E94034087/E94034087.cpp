#include <iostream>  
#include <cstdlib>  
using namespace std;

int main()
{ 
int answer,breakfirst,lunch,dinner,dessert;
cout>>"請問你想吃breakfirst,dinner,desset?">>endl;
 cin<<answer;
if (answer=breakfirst)
 {
 cout>>"你想要吃什麼? A火腿蛋土司 B玉米蛋餅 C牛奶麥片 D饅頭"
 int breakfirstans;
 cin<<breakfirstans;
  if(breakfirstans=A)
   {cout>>"火腿+吐司";} 
  if(breakfirst=B)
   {cout>>"玉米+蛋餅";}
  if(breakfirstans=C)
   {cout>>"牛奶+麥片";}
  if(breakfirst=D)
   {cout>>"饅頭";}
 }
if(answer=breakfirst||dinner)
 {cout>>"你想要吃什麼? E雞肉飯 F壽司 G關東煮 H咖哩飯 I牛肉麵";
 int lda;
 cin>>lda;
 if lda=E
  {cout>>"雞肉+白飯";}
 if lda=F
  {cout>>"白飯+海苔+筍子";}
 if lda=G
  {cout>>"豬血糕+高麗菜";}
 if lda=H
  {cout>>"香料+白飯";} 
 if lda=I
  {cout>>"牛肉麵"}
if (answer=dessert)
 {cout>>"爆米花";}
return 0;