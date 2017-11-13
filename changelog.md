#Change Log

Team membership:  Lancelei Herradura (Captain) &  Nathan Miles & Teah Elaschuk
Team conventions: Allman notation, markdown for changelog
Changelog format: [Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)

## *Version 1.0.0*
Release Date: 2017-10-5

### Added
	- created starter project (TE)
	- created changelog and readme (TE)
### Updated 

## *Version 1.0.1*
Release Date: 2017-10-5
### Added
        - Added Bootstrap and menubar and fleet page (LH)
        - Added Flights page with it's controller and views (LH)
### Updated 
        - welcome.php and template.php (LH)
        - updated bootstrap version and added the flights page onto (LH)
        - nav bar using config.php (LH)

## *Version 1.0.2*
Release Date: 2017-10-5

### Added
	- created model Fleet (NM)
	- created model Flights (NM)
### Updated 



## *Version 1.0.3*
Release Date: 2017-10-7

### Added

### Updated
        - models/Flights.php: changed file name to FlightInfo to fix a naming conflict (TE)
        - controllers/Flights.php: loaded model data and passed to view (TE)
        - views/flights.php: created a table to display flight info (TE)

## *Version 1.0.4*
Release Date: 2017-10-8
### Added

### Updated
        - controllers/FlightInfo.php: added data2 to pass in the connecting airports (LH)
        - views/welcome.php: displayed airline info (LH)

## *Version 1.0.5*
### Added
        
### Updated
        - controllers/Welcome.php: added comments, fixed fleetinfo bug changed it to Info instead of info
        - controllers/Flights.php: fixed flightinfo bug and changed 'info' to 'Info'
        - models/FlightInfo.php: added port1 and port2 for mouseover, added comments
        - views/flighs.php: added hover over flight number function

## *Version 1.0.6*
### Added
        
### Updated
        - controllers/Flights.php: fixed the bug for real this time


## *Version 1.0.7*
### Added
        - added planes.php to views and added information from plane (NM)
### Updated
        - controller/fleet.php added fleet tables and subcontroler for each plane (NM)
        - views/fleet.php setup table to display fleet correctly (NM)
        - config/routes.php corrected routes from fleet to allow each plane to be displayed (NM)
        
## *Version 1.0.8*
### Added
        - Added tests folder. Has Bootstrap index file and PlanesTest
        - Added Entity controller into core
        - Made Entity model load before everything else
        - Added travis.yml
        
### Updated
        - models/FleetInfo added more information (NM)
        - views/planes.php setup table to display planes correctly (NM)
        - controller/Fleet Fixed and error (NM)
        
## *Version 2.0.1*
### Added   
     
### Updated 
        - Info/Fleet.php changed model to reference fleetInfo instead of fleetinfo (LH)
        - Info/Flights.php changed model to reference flightInfo instead of flightinfo (LH)

## *Version 2.0.2*
### Added   
     
### Updated 
        - views/flights.php changes from to to fixing the previous error (NM)

## *Version 2.0.3* 
Release Date: 11/9/2017

### Added

    Controllers
        - controllers/Roles.php: created controller with an actor() method to store the role after it is selected in the drop down menu (TE)
    
    Models
        - Added Flight Entity Model

    Views

    Config
        - libraries/parsedown.php: added library (TE)
        - /tmp: created folder for storing sessions (TE)

    Tests
        - Added FlightTest
        - Added .travis.yml for Travis-CI

    Core
    
### Updated
    
    Controllers

    Models
        - Renamed Planes entity model to Plane

    Views
        - views/_menubar.php: added dropdown menu to navbar for selecting roles, displays role if set (TE)

    Config
        - app/config/autoload.php, config/config.php: enabled sessions (TE)
    
    Tests
        - Renamed PlanesTest to PlaneTest

    Core
        - gitignored the .idea file (TE)
        - app/config/constants.php: added user role constants (TE)
        - fixed tmp folder and git ignore (TE)

## *Version 2.0.4* 
Release Date: 11/12/2017

## Updated
 - fixed my (TE) bad code from last day, i.e.
    - removed PHP from _menubar.php view
    - added user role data to put into the menu bar config/config.php, removed hard coded data
    - renamed the Actor function in controllers/Roles.php to (the more appropriately named) User_Role

## *Version 2.0.5* 
Release Date: 11/12/2017

### Added

    Core
        - Added CSV_Model (NM)
        - Added DataMapper (NM)
        - Added Memory_Model (NM)
    Data
        - airplanes (NM)
        - airports (NM)
        - flights (NM)

    
### Updated
    
    Controllers
        - Fleet allowed code to lookup Wacky data and access the new data from CSV (NM)

    Models
        - FleetInfo changed the way the class functioned to pull in CSV data (NM)

    Views
        - fleet added ways to access new csv data (NM)
        - planes added ways to access new wacky data (NM)
    Config
        - routes updated routes to perform successful with new data (NM)
    
    Tests


    Core
        - My_Model added new models to be pulled in (NM)
        
## *Version 2.0.6* 
Release Date: 11/12/2017

### Added

    Core

    Data


    
### Updated
    
    Controllers
        - Fleet changed to not have access to wacky server (NM)

    Models
        - FleetInfo added get get function and added wacky server lookup there (NM)

    Views
        - updated the id change (NM)
        - updated the id change (NM)
    Config
        - routes updated routes to perform successful with new data (NM)
    
    Tests


    Core
    
    Data
        - airplanes added correct id information (NM)

## *Version 2.0.7* 
Release Date: 11/12/2017

### Added

    Core

    Data


    
### Updated
    
    Controllers
        

    Models
        - Plane has setter to check if our plane data is valid

    Views

    Config
        
    
    Tests
        - Uses plane entity model to check if all our plane data is valid

    Core
    
    Data

## *Version 2.0.8* 
Release Date: 11/12/2017

### Added
    Views:
        - booking.php: form layout (TE)    
    Controllers:
        - Booking.php: displays booking, still needs work (TE)
    
### Updated            
    Config:
        - added Booking to menu bar     (TE)    
        
      

   ## *Version 2.0.9* 
   Release Date: 11/12/2017
   
   ### Added
   
       Core
   
       Data
       
       Models
        -Airportinfo added to help with CSV files (NM)
   
   
       
   ### Updated
       
       Controllers
        - Fleet fixed data structure (NM)
        - Flights fixed data structure (NM)
        - Welcome fixed data structure (NM)   
   
       Models
           -flightinfo fixed data structure (NM)
           - got rid of that pesky autoload function inside flightInfo (LH)
   
       Views
   
       Config
           
       
       Tests
   
       Core
       
       Data