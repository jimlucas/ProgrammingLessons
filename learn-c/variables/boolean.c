#include <stdio.h>

#define BOOL char
#define FALSE 0
#define TRUE 1

#define MY_VAR 1

int main() {
	if ( MY_VAR == TRUE ) {
		printf("MY_VAR is true\n");
	}
	return 0;
}
