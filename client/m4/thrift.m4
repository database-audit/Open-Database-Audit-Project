# thrift.m4: Locate thrift headers and libraries for autoconf-based projects.
# Copyright (C) 2011  Rob Williams
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# Additional permission under section 7 of the GNU General Public
# License, version 3 ("GPLv3"):
#
# If you convey this file as part of a work that contains a
# configuration script generated by Autoconf, you may do so under
# terms of your choice.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

 AC_DEFUN([AC_THRIFT_CHECK],
 [

	AC_ARG_WITH([thrift],
	   [AS_HELP_STRING([--with-thrift=DIR],
		           [prefix of thrift $1 @<:@guess@:>@])])dnl


	if test "$with_thrift" != "" ; then
		AC_MSG_CHECKING([for thrift headers in directory specified $with_thrift/include/thrift])
		if test -d $with_thrift/include/thrift ; then
		    	CFLAGS="$CFLAGS -I$with_thrift/include/thrift"
		    	CPPFLAGS="$CPPFLAGS -I$with_thrift/include/thrift"			
			AC_MSG_RESULT([thrift found])

			AC_MSG_CHECKING([for thrift static libraries in directory specified $with_thrift/lib/libthrift.a])
			if test -f $with_thrift/lib/libthrift.a ; then
			    	LDFLAGS="$LDFLAGS $with_thrift/lib/libthrift.a"		
				AC_MSG_RESULT([thrift library found])
			else
				AC_MSG_ERROR([--with-thrift=$with_thrift appears to be invalid])
			fi
		else
			AC_MSG_ERROR([--with-thrift=$with_thrift appears to be invalid])
		fi
	else
		AC_MSG_CHECKING([for thrift header in normal directories])
		found_thrift_dir=""
		for thrift_dir in  /usr/include/thrift /usr/local/include/thrift 
		do
		  if test -d $thrift_dir ; then
		    CFLAGS="$CFLAGS -I$thrift_dir"
		    CPPFLAGS="$CPPFLAGS -I$thrift_dir"
		    found_thrift_dir=" $found_thrift_dir -I$thrift_dir"
		    break;
		  fi
		done
		if test "$found_thrift_dir" != "" ; then
		  AC_MSG_RESULT([found $found_thrift_dir])
		else
		  AC_MSG_ERROR([not found])
		fi

		AC_MSG_CHECKING([for thrift static library in normal paths])
		found_thrift_dir=""
		for thrift_dir in  /usr/lib/libthrift.a /usr/local/lib/libthrift.a
		do
		  if test -f $thrift_dir ; then
		    LDFLAGS="$LDFLAGS $thrift_dir"	
		    found_thrift_dir=" $thrift_dir"
		    break;
		  fi
		done
		if test "$found_thrift_dir" != "" ; then
		  AC_MSG_RESULT([found $found_thrift_dir])
		else
		  AC_MSG_ERROR([not found])
		fi
	fi

])
