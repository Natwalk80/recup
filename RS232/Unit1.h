//---------------------------------------------------------------------------

#ifndef Unit1H
#define Unit1H
//---------------------------------------------------------------------------
#endif

class RS232 {
	std::deque<char>buffer;
	HANDLE com;
	DCB config;
	OVERLAPPED over;

	public:
	bool ouvrirport(char*port);
	void lireport();
	void ecrireport(char*data, int lenght);
	bool fermerport();


};