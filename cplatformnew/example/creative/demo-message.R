# 取得圖表路徑跟輸入的parameters
args <- commandArgs(TRUE)

# 因為args[1]是圖表的檔案路徑及名稱，在此不能使用
# 實際上paramters是從args[2]開始計算

# 將parameters第一個參數設為最小值，用strtoi()將字串轉換成整數
#min<-strtoi(args[2])
# 將parameters第二個參數設為最大值，用strtoi()將字串轉換成整數
#max<-strtoi(args[3])

# 用c()組成陣列
#data<-c(min:max)

# 用mean()計算平均，並以cat()輸出。用cat()輸出則不會顯示row name
#print(mean(data))

file <- args[2]
library(stats)
#library(fpc)
library(cluster)
ff <- read.csv(file,header=FALSE) #匯入檔案
#str(ff) #看架構
#print(ff)
#set.seed(1) #隨機版本
#ff_cluster <- kmeans(ff,centers = 4) #分幾群
#ff_cluster$centers #推測1-10群屬於甚麼
#ff_cluster$cluster #看分群
#table(ff_cluster$cluster) #看各群個數
#clusplot(ff,ff_cluster$cluster,color=TRUE,shade=TRUE,labels=2,lines=0) #畫圖
#plot(ff)




k <- 1:10 #k from 1 to 10
trying <- 20 #Run the k means algorithm 100 times
avg.bt <- integer(length(k)) #Set up an empty vector to hold all of points
for(v in k){ #For each value of the range variable
  #set.seed(1) #隨機版本
  
  tw.ss <- integer(trying) #Set up an empty vector to hold the 100 trying
  for (i in 1:trying) {
    tempcluster <- kmeans(ff,v,algorithm=c("Lloyd")) #Run kmeans
    tw.ss[i] <- round(tempcluster$betweenss / tempcluster$totss , 3)*100 #Store the total withinss
  }
  avg.bt[v] <- mean(tw.ss) #Average the 100 total withinss
}


avg.btt <- integer(length(k)-1) #Set up an empty vector to hold all of points
for(v in k-1){ #For each value of the range variable
  if(v > 1){
    avg.btt[v] <- avg.bt[v+1]-avg.bt[v] #Store the tot.withinss
  }
}

avg.bttt <- integer(length(k)-2) #Set up an empty vector to hold all of points
for(v in 1:length(avg.btt)-1){ #For each value of the range variable
  avg.bttt[v] <- avg.btt[v+1]-avg.btt[v] #Store the tot.withinss
}

kk <- which.min(avg.bttt ) + 1
print(kk)
set.seed(1)
ff_cluster <- kmeans(ff,centers = kk) #分幾群
ff_cluster$cluster #看分群
#table(ff_cluster$cluster) #看各群個數
#clusplot(ff,ff_cluster$cluster,color=TRUE,shade=TRUE,labels=2,lines=0) #畫圖

