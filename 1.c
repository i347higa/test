
#include <stdio.h>

int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);
  //条件で、&演算が行えないため、シフト演算を用いて偶奇判定を行った。
  if((n >> 1) << 1 == n){
    printf("%d は偶数です\n", n);
  }
  return 0;
}
