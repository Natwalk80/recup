//---------------------------------------------------------------------------

#ifndef EtudiantsH
#define EtudiantsH

class Etudiants
{
	private:
		char * nom;
		char * prenom;
		int age;
		char telephone, adresse, email;

	public:
		Etudiants();
		~Etudiants();
		char * getName();
		char * getPrenom();
		int getAge();
		char getTelephone(), getAdresse(), getEmail();
};
//---------------------------------------------------------------------------
#endif