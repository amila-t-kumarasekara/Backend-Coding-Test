import { useState , useEffect} from 'react';
import moment from 'moment';
import axios from 'axios';

const Homepage = () => {

    //api endpoint
    const api = "http://127.0.0.1:8000/api/show";

    const [view, setView] = useState([]);

    const fetchData = async () => {
    const res = await axios.get(api);
    setView(res.data);
     };
    
     //fetch the api here.
    useEffect(() => {
    fetchData();
    }, [])

    return (
        <div>
            <table id="attendanceTable">
                <thead>
                <tr>
                    <th>Name of the employee</th>
                    <th>CheckIn</th>
                    <th>CheckOut</th>
                    <th>Total Hours</th></tr></thead>
                
                <tbody>
            
            
            {view.map((item)=>{
                return(
                        <tr>
                            <td>{
                                    item['Name']
                                }
                            </td>
                            <td>{
                                    item['Checkin'] === null ? 'N/A' : item['Checkin'] 
                                }
                            </td>
                            <td>{
                                    item['Checkout']  === null ? 'N/A' : item['Checkout']
                                }
                            </td>
                            <td>{
                                    item['Checkout'] === null || item['Checkin']===null ? "N/A" : Math.round(moment.duration(moment(item['Checkout'], "hh:mm:ss").diff(moment(item['Checkin'], "hh:mm:ss"))).asHours())
                                }
                            </td>
                        </tr>
                )
            })}
                
                
                </tbody>
             </table>
        </div>
    )
}
export default Homepage;