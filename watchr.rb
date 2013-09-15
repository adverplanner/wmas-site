
def compile_haml(infile)
  outfile = File.basename(infile, ".*") + ".html"
  %x[haml #{infile} #{outfile}]
  puts "Compile #{infile} => #{outfile}..."
end

def compile_scss(infile)
  outfile = File.basename(infile, ".*") + ".css"
  %x[compass compile]
  puts "Compile #{infile} => #{outfile}..."
end

watch(".*\.haml$") { |infile|
  compile_haml(infile.to_s)
}
