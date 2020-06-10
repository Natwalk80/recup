//---------------------------------------------------------------------------

#ifndef EnseignantsH
#define EnseignantsH

class Enseignants
{
	private:
		char * nom;
		char * prenom;
		int age;
		char telephone, adresse, email;

	public:
		Enseignants();
		~Enseignants();
		char * getName();
		char * getPrenom();
		int getAge();
		char getTelephone(), getAdresse(), getEmail();
};
//---------------------------------------------------------------------------
#endif
