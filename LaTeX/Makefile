# Pengarang: M. Fauzilkamil Bin Zainuddin
# Tajuk: Makefile untuk mengkompil PSM2

pdf:
	@echo "Mengkompil Laporan PSM2 ke PDF"
	latex psm2-awustel.tex
	latex psm2-awustel.tex
	dvips psm2-awustel -o psm2-awustel.ps
	ps2pdf psm2-awustel.ps

cuci:
	@echo "Kasi cuci sampah-sampah kompilasi, tinggalkan PDF je"
	rm -f psm2-awustel.aux
	rm -f psm2-awustel.dvi
	rm -f psm2-awustel.loabbre
	rm -f psm2-awustel.loapp
	rm -f psm2-awustel.lof
	rm -f psm2-awustel.log
	rm -f psm2-awustel.los
	rm -f psm2-awustel.lot
	rm -f psm2-awustel.ps
	rm -f psm2-awustel.toc
	rm -f source/pre/abbreviations.aux
	rm -f source/pre/abstract.aux
	rm -f source/pre/abstrak.aux
	rm -f source/pre/acknowledgement.aux
	rm -f source/pre/dedication.aux
	rm -f source/pre/listofappendices.aux
	rm -f source/pre/symbols.aux

cucihabis:
	@echo "Kasi cuci sampah-sampah kompilasi..."
	rm -f psm2-awustel.aux
	rm -f psm2-awustel.dvi
	rm -f psm2-awustel.loabbre
	rm -f psm2-awustel.loapp
	rm -f psm2-awustel.lof
	rm -f psm2-awustel.log
	rm -f psm2-awustel.los
	rm -f psm2-awustel.lot
	rm -f psm2-awustel.pdf
	rm -f psm2-awustel.ps
	rm -f psm2-awustel.toc
	rm -f source/pre/abbreviations.aux
	rm -f source/pre/abstract.aux
	rm -f source/pre/abstrak.aux
	rm -f source/pre/acknowledgement.aux
	rm -f source/pre/dedication.aux
	rm -f source/pre/listofappendices.aux
	rm -f source/pre/symbols.aux

