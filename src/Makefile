LIVRO=document

all:	pdf

pdf:
	#precisa ser 3 vezes para o pdflatex gerar as referencias corretas
	pdflatex $(LIVRO).tex
	bibtex $(LIVRO)
	pdflatex $(LIVRO).tex
	pdflatex $(LIVRO).tex
clean:
	rm -rf  *.aux *.soc *.toc *.lo[fpt] *.blg *.bbl \
	*.ind *.out *.ilg *.idx *.glo *.gls *.log *.$(LIVRO) *~
	rm -rf $(LIVRO).pdf 