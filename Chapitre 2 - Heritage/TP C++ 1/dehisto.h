//---------------------------------------------------------------------------

#ifndef dehistoH
#define dehistoH
#include "de.h"

//---------------------------------------------------------------------------


 class dehisto:public de
 {
		int tab[7];

	public:

		dehisto();
		void jet(); //simule le jet d'un dé
		void jet(int n); //simule le jet de n dé
 };








//---------------------------------------------------------------------------
#endif
