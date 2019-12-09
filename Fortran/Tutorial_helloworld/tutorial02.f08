PROGRAM HelloProgram
IMPLICIT NONE

integer :: favnum = 0

WRITE (*,*) 'Hello, World!'

WRITE (*,*) 'Enter your favorite number:'
READ (*,*) favnum
WRITE (*,*) 'Your favorite number is:', favnum

END
