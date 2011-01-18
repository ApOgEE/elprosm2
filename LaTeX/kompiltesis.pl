#!/usr/bin/perl -w
#
# @ Pengarang: M. Fauzilkamil Zainuddin
# @ Tajuk: Skrip Perl untuk mengkompil psm2-awustel.tex
# @ Copyright (C) 2011, M. Fauzilkamil Zainuddin
#
# @ Keterangan:
#	Oleh kerana saya suka mengarut-ngarut dalam kerja yang saya lakukan,
#	saya membuat skrip ini untuk memudahkan kerja kompilasi saya.
#
# @ Cara Penggunaan:
#	Saya membayangkan skrip ini untuk digunakan seperti ini:
#	
#	Untuk mengkompil PDF
#		$ ./kompiltesis.pl kompil
#
#	Untuk membuang fail sampah yang dihasilkan setelah kompilasi
#	tak berjaya.
#		$ ./kompiltesis.pl cuci
#
# @ Nota Kaki Bangku:
# 	kod ini masih lagi ditahap hampas dan tiada faedah menggunakannya
#	Jika anda mahu menggunakannya juga, risiko tanggung sendiri.
#

sub kepala {
	# bahagian ni tak buat apa kerja berfaedah pun. Hanya untuk 
	# memaparkan nama dan versi skrip ni je.
	print "[@] Skrip Pengkompil psm2-awustel.tex versi 0.0.0\n";
	print "[@] Copyright (C) 2011, M. Fauzilkamil Zainuddin\n";
	print "    ---------------------------------------------\n\n"
}

sub kompil {
	kepala();
	print "Mari kita mengkompil tesis!\n\n";	
	system('pdflatex psm2-awustel.tex');
}

sub cuci {
	kepala();
	print "Mari kita membuang sampah...\n\n";
	system('rm -fv psm2-awustel.log \
		psm2-awustel.aux psm2-awustel.loabbre psm2-awustel.loapp psm2-awustel.lof \
		psm2-awustel.los psm2-awustel.lot psm2-awustel.toc source/pre/abbreviations.aux \
		source/pre/abstract.aux source/pre/abstrak.aux source/pre/acknowledgement.aux \
		source/pre/dedication.aux source/pre/listofappendices.aux source/pre/symbols.aux');

	# fail PDF output ni boleh komen kalau taknak buang
	system('rm -fv psm2-awustel.pdf');	

	# kita membuang...
	#	psm2-awustel.aux
	#	psm2-awustel.loabbre
	#	psm2-awustel.loapp
	#	psm2-awustel.lof
	#	psm2-awustel.log
	#	psm2-awustel.los
	#	psm2-awustel.lot
	#	psm2-awustel.pdf
	#	psm2-awustel.toc
	#	source/pre/abbreviations.aux
	#	source/pre/abstract.aux
	#	source/pre/abstrak.aux
	#	source/pre/acknowledgement.aux
	#	source/pre/dedication.aux
	#	source/pre/listofappendices.aux
	#	source/pre/symbols.aux

}

sub cara {
	kepala();
	print "/!\\ Setakat ni, ada dua cara je nak guna skrip ni... jangan buat pasal!\n\n";
	print " Cara mengkompil PDF:\n";
	print "    \$ ./kompiltesis.pl kompil\n\n";
	print " Cara membuang fail sampah setelah pengkompilan terfakap:\n";
	print "    \$ ./kompiltesis.pl cuci\n\n";
}

use Switch;

my $suis = "";

if ( $#ARGV != 0) {
	cara();
	exit;
}
$suis = shift(@ARGV);

switch ($suis) {
	case 'kompil'	{ kompil(); }
	case 'cuci'	{ cuci(); }
	else 		{ cara(); }
}

