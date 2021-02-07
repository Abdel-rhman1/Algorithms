#include<iostream>
using namespace std;
void swap(int *x, int *y){
	int tmp = *x;
	*x = *y;
	*y = tmp;
}
int patition(int arr[], int low ,int high){
	int pivot = arr[high];
	int i = low - 1;
	for(int j=low;j<high;j++){
		if(arr[j] < pivot){
			i++;
			swap(&arr[j] ,&arr[i]);
		}
	}
	swap(&arr[i+1] , &arr[high]);
	return (i+1);
}
void QuickSort(int arr[], int low , int high){
	if(high > low){
		int pi = patition(arr , low , high);
		QuickSort(arr , low , pi-1);
		QuickSort(arr , pi+1 , high);
	}
}
void printArray(int array[],int n){
	for(int i=0;i<n;i++){
		cout<<array[i]<<" ";
	}
	cout<<endl;
}
int main(){
	int array[] = {100,34,12,9,2,1};
	int n = sizeof(array)/sizeof(array[0]);
	QuickSort(array,0,n-1);
	printArray(array,n);
	return 0;
}
