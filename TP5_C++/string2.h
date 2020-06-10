//---------------------------------------------------------------------------

#ifndef string2H
#define string2H
//---------------------------------------------------------------------------
#endif

class chaine2
{
	private:

		int _taille; // taille allouee pour la chaine
		char* _ptr; // pointeur sur la chaine

	public:

		chaine2(const char* ch = ""); // constructeur, initialisation , _taille re�oit la longueur de la cha�ne

		chaine2(char c, int n= 1); // constructeur, alloue un emplacement de n caract�res initialis�s � c

		chaine2(const chaine2&); // constructeur de recopie

		~ chaine2(); // destructeur,lib�re emplacement m�moire

		int longueur(); // retourne la longueur de la chaine

		char operator [] (int); // retourne une copie du caractere de la position donnee

		void operator += (char); // ajoute un caractere a la fin de la chaine

		void operator += (const chaine2&); // ajoute une chaine a la fin de la chaine

		chaine2& operator + (const chaine2&); // retourne une nouvelle chaine formee a partir de la concatenation de deux autres

		chaine2& minuscule(); // retourne une nouvelle chaine formee des caracteres de la chaine d'origine mis en minuscules

		chaine2& operator = (const chaine2&); // affectation d'une chaine

		int operator == (const chaine2&); // comparaison de deux cha�nes

		int operator != (const chaine2&); // compare deux chaines

};