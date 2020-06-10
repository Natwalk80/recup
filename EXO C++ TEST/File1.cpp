#pragma hdrstop
#pragma argsused

#ifdef _WIN32
#include <tchar.h>
#else
  typedef char _TCHAR;
  #define _tmain main
#endif

#include <stdio.h>
#include <iostream.h>
#include "Unit1.h"
using namespace std;

 int _tmain(int argc, _TCHAR* argv[]) 
{
	Calcul calcul;

	calcul.Initialise();
    calcul.Additionne();

    system ("PAUSE");
	return 0;
}
